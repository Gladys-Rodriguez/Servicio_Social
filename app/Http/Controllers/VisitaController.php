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
            'ciudad' => 'required',
            'alcaldia' => 'required',
            'colonia' => 'required',
            'calle' => 'required',
            'num_ext' => 'required',
            'num_int' => 'nullable',
            'cp' => 'required |regex:/^[0-9]+[0-9]+[0-9]+[0-9]+[0-9]/',
        ]);

        $direccion = direccion::create($validateDireccion);
        //$empresa = $direccion->empresa()->create($request->input());
        $empresa = $direccion->empresa()->create($validateEmpresa);

        return redirect()->action('VisitaController@registrarSolicitud', ['empresa'=>$empresa->id] );
    }


/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS SOLICITUDES )--------------------------------------
----------------------------------------------------------------------------------------*/    

    public function index(){                                          //MÉTODO INDEX()
        $user_id = Auth::user()->id;
        $docente = Docente::where('user_id', $user_id)->first();
        
        $visitas = Visita::where('docente_id', $docente->id )->where('validacion',0)->orderby('id','desc')->get();
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
            'fecha_visita' => 'required| date | after:tomorrow',
            'ruta' => 'required',
        ]);

        $visita = Visita::create($validateVisita);
        
        /*$visita_documento = VisitaDocumento::create([
            'visita_id' => $visita->id,
            'tipo_documento_id' => 1, //Solicitud-Visita
            'ruta' => '',
            'validacion' => false,
            'observaciones' => '',
        ]);
        $visita_documento->ruta = $visita_documento->file('ruta')->store('public/DocumentosVisitas');
        $visita_documento->save();
*/
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

/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS VISITAS )--------------------------------------
----------------------------------------------------------------------------------------*/ 

    public function mostrarVisitas(){                               //MÉTODO INDEX()            
        $user_id = Auth::user()->id;
        $docente = Docente::where('user_id', $user_id)->first();
        $visitas = Visita::where('docente_id', $docente->id )->where('validacion',1)->orderby('id','desc')->get();

        return view('Pantallas_Docente_Practicas_Visitas.indexVisitas')
            ->with('visitas',$visitas);
    } 

    public function registrarVisitaDocumento(Visita $visita){                       //MÉTODO CREATE()
        $documentos = VisitaDocumento::where('visita_id', $visita->id)->get();
        $tipoDocumentos = TipoDocumento::get()->pluck('nombre', 'id');

        $documentosId =VisitaDocumento::where('visita_id', $visita->id)->select('tipo_documento_id')->get();
        $tipoDocumentos2 = TipoDocumento::whereNotIn('id',$documentosId)->get()->pluck('nombre', 'id');
        //dd($tipoDocumentos2);

        return view('Pantallas_Docente_Practicas_Visitas.registrarVisitaDocumento')
            ->with('documentos', $documentos)
            ->with('visita', $visita)
            ->with('tipoDocumentos', $tipoDocumentos2);
    }

    public function guardarVisitaDocumento(Request $request){

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

        return redirect()->route('docente.registrarVisitaDocumento', ['visita' => $visita->id])
            ->with('visita',$visita);
    }

    public function editarVisitaDocumento(VisitaDocumento $visitaDocumento){
        $tipoDocumentos = TipoDocumento::get()->pluck('nombre', 'id');

        return view('Pantallas_Docente_Practicas_Visitas.editarVisitaDocumento')
            ->with('tipoDocumentos', $tipoDocumentos)
            ->with('visitaDocumento',$visitaDocumento);
    }

    public function actualizarVisitaDocumento(Request $request, VisitaDocumento $visitaDocumento){
        $validateData = $request->validate([
            'visita_id' => 'required',
            'tipo_documento_id' => 'required',
        ]);
        
        $visitaDocumento->fill($validateData);
        if($request->file('ruta') != null) {
            $visitaDocumento->ruta =$request->file('ruta')->store('public/DocumentosVisitas');    
        }
        $visitaDocumento->save();

        
        $visita = Visita::where('id', $request->input('visita_id'))->first();

        return redirect()->route('docente.registrarVisitaDocumento', ['visita' => $visita->id])
            ->with('visita',$visita);
    }

/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS GRUPOS )--------------------------------------
----------------------------------------------------------------------------------------*/   

    public function mostrarGrupos(Visita $visita){                                //MÉTODO INDEX()
        $gruposVisita = grupoVisita::where('visita_id', $visita->id)->get();
        //$grupos2 = Grupo::orderby('secuencia')->paginate(10);


        $gruposVisitaId = grupoVisita::where('visita_id', $visita->id)->select('grupo_id')->get();
        $grupos = Grupo::whereNotIn('id',$gruposVisitaId)->orderby('secuencia')->paginate(10);


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

        return view('Pantallas_Docente_Practicas_Visitas.inicio')
            ->with('plantillas',$plantillas)
            ->with('ejemplos', $ejemplos);
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

    public function mostrarFormatos() {
        $plantillas_visible = VisitaFormato::where('estado','1')->where('tipo','plantilla')->orderBy('id','desc')->get();
        $plantillas_oculto = VisitaFormato::where('estado','0')->where('tipo','plantilla')->orderBy('id','desc')->get();
        
        $ejemplos_visible = VisitaFormato::where('estado','1')->where('tipo','ejemplo')->orderBy('id','desc')->get();
        $ejemplos_oculto = VisitaFormato::where('estado','0')->where('tipo','ejemplo')->orderBy('id','desc')->get();


        return view('Pantallas_Docente_Practicas_Visitas.Admin.indexFormatos')
            ->with('plantillas_visible', $plantillas_visible)
            ->with('plantillas_oculto', $plantillas_oculto)
            ->with('ejemplos_visible', $ejemplos_visible)
            ->with('ejemplos_oculto', $ejemplos_oculto);
    }

    public function registrarFormato() {
        return view('Pantallas_Docente_Practicas_Visitas.Admin.registrarFormato');
    }


    public function guardarFormato(Request $request) {

        $formato = VisitaFormato::create([
            'nombre' => $request->input('nombre'),
            'tipo' => $request->input('tipo'), 
            'ruta' => '',
            'estado' => $request->input('estado'),
        ]);
        $formato->ruta = $request->file('ruta')->store('public/FormatosVisitas');
        $formato->save();

        return redirect()->action('VisitaController@mostrarFormatos');
    }

    public function editarFormato(VisitaFormato $visitaFormato) {
        return view('Pantallas_Docente_Practicas_Visitas.Admin.editarFormato')
        ->with('visitaFormato', $visitaFormato);
    }

    public function actualizarFormato(Request $request, VisitaFormato $visitaFormato) {
        
        $validateData = $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'estado' => 'required',
        ]);
        
        $visitaFormato->fill($validateData);
        if($request->file('ruta') != null) {
            $visitaFormato->ruta =$request->file('ruta')->store('public/FormatosVisitas');    
        }
        $visitaFormato->save();
        return redirect()->action('VisitaController@mostrarFormatos');
    }

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
