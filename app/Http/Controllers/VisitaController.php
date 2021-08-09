<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use App\Models\VisitaDocumento;
use App\Models\tipoDocumento;
use App\Models\Docente;
use App\Models\Empresa;
use App\Models\direccion;
use App\Models\Grupo;
use App\Models\GrupoVisita;
use App\Models\VisitaFormato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class VisitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('docente',['only'=> ['index']]);


    }

    

/*---------------------------------------------------------------------------------------- 
--------------------------------( MÉTODOS EMPRESA )---------------------------------------
----------------------------------------------------------------------------------------*/

    public function mostrarEmpresas(){                                     //METODO INDEX()
        $empresas = Empresa::orderBy( 'nombre')->paginate(10);
        
        return view('Pantallas_Docente_Practicas_Visitas.indexEmpresas')
            ->with('empresas', $empresas);
    }

    public function registrarEmpresa(){                                     //METODO CREATE()
        return view('Pantallas_Docente_Practicas_Visitas.registrarEmpresa');
    }

    public function guardarEmpresa(Request $request){                       //METODO STORE()

        $validateEmpresa = $request->validate([
            'nombre' => 'required',
        ]);
        
        $validateDireccion = $request->validate([
            'nombre' => 'required',
            'ciudad' => 'required |regex:/^[\pL\s\-]+$/u',
            'alcaldia' => 'required |regex:/^[\pL\s\-]+$/u',
            'colonia' => 'required',
            'calle' => 'required',
            'num_ext' => 'required |regex:/^([0-9])*$/',
            'num_int' => 'nullable',
            'cp' => 'required |regex:/^\d{5}$/',
        ]);

        $direccion = direccion::create($validateDireccion);
        $empresa = $direccion->empresa()->create($validateEmpresa);

        return redirect()->action('VisitaController@registrarSolicitud', ['empresa'=>$empresa->id] );
    }

    public function editarEmpresa(Empresa $empresa){

        return view('Pantallas_Docente_Practicas_Visitas.EmpresaEditar')
        ->with('empresa',$empresa);
    }

    public function actualizarEmpresa(Empresa $empresa, Request $request){
        $validateData = $request->validate([
            'nombre' => 'required',
            'ciudad' => 'required |regex:/^[\pL\s\-]+$/u',
            'alcaldia' => 'required |regex:/^[\pL\s\-]+$/u',
            'colonia' => 'required',
            'calle' => 'required',
            'num_ext' => 'required |regex:/^([0-9])*$/',
            'num_int' => 'nullable',
            'cp' => 'required |regex:/^\d{5}$/',
        ]);

        $empresa->fill($validateData);
        $empresa->save();

        $datos = DB::table('direccions')
        ->where('id_direccions',$empresa->direccion_id)
        ->update([
            'ciudad' => $validateData['ciudad'],
            'alcaldia' => $validateData['alcaldia'],
            'colonia' => $validateData['colonia'],
            'calle' => $validateData['calle'],
            'num_ext' => $validateData['num_ext'],
            'num_int' => $validateData['num_int'],
            'cp' => $validateData['cp'],
        ]);

        return redirect()->action('VisitaController@index');
    }

/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS SOLICITUDES )--------------------------------------
----------------------------------------------------------------------------------------*/    

    public function index(){                                          //MÉTODO INDEX()
        $user_id = Auth::user()->id;
        $docente = Docente::where('user_id', $user_id)->first();
        
        $visitas = Visita::where('docente_id', $docente->id )->orderby('visita_estado_id', 'desc')->orderby('id','desc')->get();
        return view('Pantallas_Docente_Practicas_Visitas.index')
            ->with('visitas', $visitas) ;
    }

    public function registrarSolicitud(Empresa $empresa){                     //MÉTODO CREATE()
        $user_id = Auth::user()->id;
        $docente = Docente::where('user_id', $user_id)->first();
        
        return view('Pantallas_Docente_Practicas_Visitas.registrarSolicitud')
        ->with('empresa',$empresa)
        ->with('docente', $docente);
    }

    public function guardarSolicitud(Request $request){                      //MÉTODO STORE()
        $validateVisita = $request->validate([
            'docente_id'=> 'required',
            'empresa_id' => 'required',
            'visita_estado_id' => 'required',
            'fecha_visita' => 'required| date | after:tomorrow',
        ]);

        $visita = Visita::create($validateVisita);
        
        return redirect()->action('VisitaController@mostrarGrupos', ['visita'=>$visita->id] );
    }

    public function verSolicitud(Visita $visita){                   //MÉTODO SHOW()
        $documentos = VisitaDocumento::where('visita_id', $visita->id)->get();
        $gruposVisita = GrupoVisita::where('visita_id', $visita->id)->get();

        return view('Pantallas_Docente_Practicas_Visitas.mostrarSolicitud')
            ->with('visita', $visita)
            ->with('documentos',$documentos)
            ->with('gruposVisita', $gruposVisita);
    }


    public function modificarEstadoSolcitud(Visita $visita){

        if($visita->visita_estado->id == 1){
            Visita::where('id',$visita->id)->update([
                'visita_estado_id' => '2',
            ]);
        }
        if($visita->visita_estado->id == 3){
            Visita::where('id',$visita->id)->update([
                'visita_estado_id' => '4',
            ]);
        }
        //$visita->save();
        return redirect()->action('VisitaController@index');
    }

    public function editarSolicitud(Visita $visita){
        return view('Pantallas_Docente_Practicas_Visitas.FechaEditar')
        ->with('visita',$visita);
    }

    public function actualizarSolicitud(Visita $visita, Request $request ){
        $validateData = $request->validate([
            'fecha_visita' => 'required| date | after:tomorrow',
        ]);
        
        $visita->fill($validateData);
        $visita->save();

        return redirect()->action('VisitaController@index');
    }

/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS DOCUMENTOS )--------------------------------------
----------------------------------------------------------------------------------------*/ 

    public function indexDocumentosSolicitud(Visita $visita){
        $documentos = VisitaDocumento::where('visita_id', $visita->id)->get();

        $documentosId =VisitaDocumento::where('visita_id', $visita->id)->select('tipo_documento_id')->get();
        $tipoDocumentos = TipoDocumento::whereNotIn('id',$documentosId)
            ->where('estado','1')->where('etapa','solicitud')->get()->pluck('nombre', 'id');

        return view('Pantallas_Docente_Practicas_Visitas.DocumentosSolicitudRegistrar')
           ->with('documentos', $documentos)
           ->with('visita', $visita)
           ->with('tipoDocumentos', $tipoDocumentos);
    }

    public function indexDocumentosVisita(Visita $visita){
        $documentos = VisitaDocumento::where('visita_id', $visita->id)->get();

        $documentosId =VisitaDocumento::where('visita_id', $visita->id)->select('tipo_documento_id')->get();
        $tipoDocumentos = TipoDocumento::whereNotIn('id',$documentosId)
            ->where('estado','1')->where('etapa','visita')->get()->pluck('nombre', 'id');

        return view('Pantallas_Docente_Practicas_Visitas.registrarVisitaDocumento')
           ->with('documentos', $documentos)
           ->with('visita', $visita)
           ->with('tipoDocumentos', $tipoDocumentos);
    }

    public function guardarDocumentosSolicitud(Request $request){
        $validateData = $request->validate([
            'tipo_documento_id' => 'required',
            'ruta' => 'required',
        ]);
        
        $visita_documento = VisitaDocumento::create([
            'visita_id' => $request->input('visita_id'),
            'tipo_documento_id' => $request->input('tipo_documento_id'), 
            'ruta' => '',
            'validacion' => false,
            'observaciones' => '',
        ]);
        $visita_documento->ruta = $request->file('ruta')->store('public/DocumentosVisitas');
        $visita_documento->save();

        $visita = Visita::where('id', $request->input('visita_id'))->first();

        if($visita_documento->tipo_documento->etapa == 'Visita'){
            return redirect()->route('docente.indexDocumentosVisita', ['visita' => $visita->id])
            ->with('visita',$visita);
        }

        return redirect()->route('docente.indexDocumentosSolicitud', ['visita' => $visita->id])
            ->with('visita',$visita);
        
    }

    public function editarDocumentosSolicitud(VisitaDocumento $visita_documento){
        $tipoDocumentos = TipoDocumento::where('estado','1')->get()->pluck('nombre', 'id');

        return view('Pantallas_Docente_Practicas_Visitas.DocumentosSolicitudEditar')
            ->with('tipoDocumentos', $tipoDocumentos)
            ->with('visita_documento',$visita_documento);

        return view('Pantallas_Docente_Practicas_Visitas.registrarVisitaDocumento')
            ->with('tipoDocumentos', $tipoDocumentos)
            ->with('visita_documento',$visita_documento);
 
    }

    public function actualizarDocumentosSolicitud(Request $request, VisitaDocumento $visita_documento){
        $validateData = $request->validate([
            'visita_id' => 'required',
            'ruta' => 'required',
        ]);
        
        $visita_documento->fill($validateData);
        $visita_documento->ruta =$request->file('ruta')->store('public/DocumentosVisitas');    
        $visita_documento->save();

        $visita = Visita::where('id', $request->input('visita_id'))->first();

        if($visita_documento->tipo_documento->etapa == 'Visita'){
            return redirect()->route('docente.indexDocumentosVisita', ['visita' => $visita->id])
            ->with('visita',$visita);
        }

        return redirect()->route('docente.indexDocumentosSolicitud', ['visita' => $visita->id])
            ->with('visita',$visita);
    }

/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS VISITAS )--------------------------------------
----------------------------------------------------------------------------------------*/ 



/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS GRUPOS )--------------------------------------
----------------------------------------------------------------------------------------*/   

    public function mostrarGrupos(Visita $visita){                                //MÉTODO INDEX()
        $gruposVisita = grupoVisita::where('visita_id', $visita->id)->get();


        $gruposVisitaId = grupoVisita::where('visita_id', $visita->id)->select('grupo_id')->get();
        $grupos = Grupo::whereNotIn('id',$gruposVisitaId)->where('estado','1')->orderby('secuencia')->paginate(10);


        return view('Pantallas_Docente_Practicas_Visitas.indexGrupos')
            ->with('grupos',$grupos)
            ->with('visita',$visita)
            ->with('gruposVisita',$gruposVisita);
    }

    public function crearGrupoVisita(Grupo $grupo, Visita $visita){              //MÉTODO CREATE()

        return view('Pantallas_Docente_Practicas_Visitas.registrarGrupoVisita')
            ->with('grupo',$grupo)
            ->with('visita',$visita);
    }

    public function guardarGrupoVisita(Request $request){                         //MÉTODO STORE()
        $grupovisita = GrupoVisita::create($request->input());

        $visita = Visita::where('id', $request->input('visita_id'))->first();

        return redirect()->route('docente.mostrarGrupos', ['visita' => $visita->id])
            ->with('visita',$visita);
    }

    public function eliminarGrupoVisita(GrupoVisita $grupoVisita){                //MÉTODO DESTROY()
        $visita = Visita::where('id', $grupoVisita->visita_id)->first();
        $grupoVisita->delete();

        return redirect()->route('docente.mostrarGrupos', ['visita' => $visita->id])
            ->with('visita',$visita);
    }


/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS INICIO )--------------------------------------
----------------------------------------------------------------------------------------*/   

    public function inicio() {
        $plantillas = VisitaFormato::where('tipo', 'plantilla')->where('estado', 1)->get();
        $ejemplos = VisitaFormato::where('tipo', 'ejemplo')->where('estado', 1)->get();
        $calendarios = VisitaFormato::where('tipo', 'calendario')->where('estado', 1)->get();

        return view('Pantallas_Docente_Practicas_Visitas.inicio')
            ->with('plantillas',$plantillas)
            ->with('ejemplos', $ejemplos)
            ->with('calendarios', $calendarios);
    }

    public function mostrarDatosDocente(){
        $user_id = Auth::user()->id;
        $docente = Docente::where('user_id', $user_id)->first();

        return view('Pantallas_Docente_Practicas_Visitas.mostrarDatosDocente')
            ->with('docente', $docente);
    }
/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS ADMIN FORMATOS )--------------------------------------
----------------------------------------------------------------------------------------*/   



    public function hola(){
        return "hola";
        
    }

    public function getLogout()
    {
        //
        Auth::logout();
        return redirect('/');
    }
}
