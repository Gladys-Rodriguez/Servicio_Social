<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;
use App\Models\Visita;
use App\Models\VisitaDocumento;
use App\Models\tipoDocumento;
use App\Models\Docente;
use App\Models\Empresa;
use App\Models\direccion;
use App\Models\Grupo;
use App\Models\Carrera;
use App\Models\GrupoVisita;
use App\Models\VisitaFormato;

use Illuminate\Support\Facades\DB;

class AdminPracSolicitudesController extends Controller
{
    public function index(){
        $visitas = Visita::where('visita_estado_id','2')->orderby('id','desc')->paginate(3);

        return view('Pantallas_Admin_Practicas_Visitas.SolicitudesIndex')
            ->with('visitas', $visitas);
    }

    public function edit($id)
    {
        //
        $datos= Visita::findOrFail($id);
        $nuevo = \DB::table('visitas')
        ->join('empresas','visitas.empresa_id','=','empresas.id')
        ->join('grupos_visitas','visitas.id','=','grupos_visitas.visita_id')
        ->join('grupos','grupos_visitas.grupo_id','=','grupos.id')
        ->join('carreras','grupos.carrera_id','=','carreras.id')
        ->join('direccions','empresas.direccion_id','=','direccions.id_direccions')
        ->join('docentes','visitas.docente_id','=','docentes.id')
        ->join('users','docentes.user_id','=','users.id')
        ->join('datos','docentes.dato_id','=','datos.id_datos')
        ->join('visita_documentos','visitas.id','=','visita_documentos.visita_id')
        ->join('tipo_documentos','visita_documentos.tipo_documento_id','=','tipo_documentos.id')
        ->select('visitas.observaciones',\DB::raw('CONCAT(direccions.calle,", num_ext:",direccions.num_ext,", num_int:",direccions.num_int,", c.p ",direccions.cp,", Col.",direccions.colonia,", ",direccions.alcaldia,", ",direccions.ciudad,".") as fulldir'),'visita_documentos.ruta','carreras.nombre as carrera','grupos_visitas.cantidad_alumnos','visitas.id as id','users.id as matricula',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'empresas.nombre as empresaN','users.email','grupos.secuencia','visitas.fecha_visita')
        ->where('tipo_documentos.id','1')
        ->where('visitas.id',$id)
        ->get();

        return view("Pantallas_Admin_Practicas_Visitas.SolicitudesPra", compact('nuevo','datos'));
    }

    public function update(Request $request, $id)
    {
        //
        $datos= Visita::findOrFail($id);
        $datos->update($request->all());
        return redirect("/Solicitudes_Practicas_Visitas");
    }


    public function registrarDocente(){
        return view('Pantallas_Admin_Practicas_Visitas.registroDocente');
    }

    public function guardarDocente(Request $request){

        $id_user = DB::table('users')->insertGetId([
            'id' => $request->input('num_empleado'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'id_rol' => $request->input('id_rol'),
            'estado' => $request->input('estado'),
        ]);

        $id_datos = DB::table('datos')->insertGetId([
            'nombre' => $request->input('nombre'),
            'ap_paterno' => $request->input('ap_paterno'),
            'ap_materno' => $request->input('ap_materno'),
            'telefono' => $request->input('telefono'),
            'celular' => $request->input('celular'),
        ]);

        $docente = Docente::create([
            'academia' => $request->input('academia'),
            'dato_id' => $id_datos,
            'user_id' => $id_user,
        ]);

        return redirect()->action('AdminPracSolicitudesController@index');
    }

    public function editarSolicitud(Visita $visita){
        $documentos = VisitaDocumento::where('visita_id', $visita->id)->get();
        $gruposVisita = GrupoVisita::where('visita_id', $visita->id)->get();

        return view('Pantallas_Admin_Practicas_Visitas.SolicitudesEditar')
            ->with('visita',$visita)
            ->with('documentos',$documentos)
            ->with('gruposVisita', $gruposVisita);
    }

    public function solicitudesCorregidasIndex(){
        $visitas = Visita::where('visita_estado_id','4')->orderby('id','desc')->paginate(3);

        return view('Pantallas_Admin_Practicas_Visitas.SolicitudesIndexCorregidas')
            ->with('visitas', $visitas);
    }

    public function solicitudesRechazadasIndex(){
        $visitas = Visita::where('visita_estado_id','6')->orderby('id','desc')->paginate(3);

        return view('Pantallas_Admin_Practicas_Visitas.SolicitudesIndexRechazadas')
            ->with('visitas', $visitas);
    }

    public function actualizarSolicitud(Visita $visita, Request $request){
        $validateData = $request->validate([
            'visita_estado_id' => 'required',
            'observaciones' => 'nullable',
        ]);

        $visita->fill($validateData);
        $visita->save();
        
        return redirect()->action('AdminPracSolicitudesController@index');
    }
    

/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS VISITA DOCUMENTO)--------------------------------
----------------------------------------------------------------------------------------*/  
    public function editarDocumentosSolicitud (VisitaDocumento $visita_documento){
        $tipoDocumentos = TipoDocumento::get()->pluck('nombre', 'id');

        return view('Pantallas_Admin_Practicas_Visitas.VisitaDocumentoEditar')
            ->with('tipoDocumentos', $tipoDocumentos)
            ->with('visita_documento',$visita_documento);
    }

    public function actualizarDocumentosSolicitud(Request $request,  VisitaDocumento $visita_documento){
        $validateData = $request->validate([
            'visita_id' => 'required',
            'observaciones' => 'nullable',
            'validacion' =>'required',
        ]);

        $id_datos = DB::table('visita_documentos')->where('id', $visita_documento->id)->update([
            'validacion' => $validateData['validacion'],
            'observaciones' => $validateData['observaciones'],
        ]);


        $visita = Visita::where('id', $request->input('visita_id'))->first();

        return redirect()->route('AdminPracticas.editarSolicitud', ['visita' => $visita->id])
            ->with('visita',$visita);
    }

/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS TIPO DOCUMENTO)--------------------------------
----------------------------------------------------------------------------------------*/  

    public function indexTipoDocumento(){                                       //INDEX()
        $documentos = TipoDocumento::where('tramite', 'Visitas Escolares')
            ->orderby('estado','desc')->orderby('etapa')->paginate(15);

        return view('Pantallas_Admin_Practicas_Visitas.TipoDocumentoIndex')
            ->with('documentos', $documentos);
    }

    public function registrarTipoDocumento(){                                   // CREATE()
            return view('Pantallas_Admin_Practicas_Visitas.TipoDocumentoRegistrar');
        }

    public function guardarTipoDocumento(Request $request){                     //STORE()
        $tipo_documento = TipoDocumento::create($request->input());

        return redirect()->action('AdminPracSolicitudesController@indexTipoDocumento');
    }

    public function editarTipoDocumento(TipoDocumento $tipo_documento){         //EDIT()
        return view('Pantallas_Admin_Practicas_Visitas.TipoDocumentoEditar')
            ->with('tipo_documento',$tipo_documento);
    }
    
    public function actualizarTipoDocumento(Request $request, TipoDocumento $tipo_documento){    //UPDATE()
        $validateData = $request->validate([
            'nombre' => 'required',
            'tramite' => 'required',
            'etapa' => 'required',
            'estado' => 'required',
        ]);

        $tipo_documento->fill($validateData);
        $tipo_documento->save();

        return redirect()->action('AdminPracSolicitudesController@indexTipoDocumento');
    }

/*--------------------------------------------------------------------------------------
---------------------------------( MÉTODOS FORMATOS)------------------------------------
----------------------------------------------------------------------------------------*/ 

    public function registrarFormato(){
        return view('Pantallas_Admin_Practicas_Visitas.FormatosRegistrar');
    }

    public function guardarFormato(Request $request){
        $formato = VisitaFormato::create([
            'nombre' => $request->input('nombre'),
            'tipo' => $request->input('tipo'), 
            'ruta' => '',
            'estado' => $request->input('estado'),
        ]);
        $formato->ruta = $request->file('ruta')->store('public/FormatosVisitas');
        $formato->save();

        return redirect()->action('AdminPracSolicitudesController@indexFormatosEjemplo');
    }

    public function editarFormato(VisitaFormato $visita_formato){
        return view('Pantallas_Admin_Practicas_Visitas.FormatosEditar')
            ->with('visita_formato', $visita_formato);
    }

    public function actualizarFormato(VisitaFormato $visita_formato, Request $request){
        $validateData = $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'estado' => 'required',
        ]);
        
        $visita_formato->fill($validateData);
        $visita_formato->save();
        if($request->file('ruta') != null) {
            $visita_formato->ruta =$request->file('ruta')->store('public/FormatosVisitas');    
        }
        
        
        if($validateData['tipo'] == 'Calendario'){
            return redirect()->action('AdminPracSolicitudesController@indexFormatosCalendarioVisitas');
        }

        if($validateData['tipo'] == 'Ejemplo'){
            return redirect()->action('AdminPracSolicitudesController@indexFormatosEjemplo');
        }

        if($validateData['tipo'] == 'Plantilla'){
            return redirect()->action('AdminPracSolicitudesController@indexFormatosPlantilla');
        }
        
    }

    public function indexFormatosEjemplo(){
        $formatos = VisitaFormato::where('tipo','Ejemplo')->orderBy('estado','desc')->orderBy('id','desc')->get();

        return view('Pantallas_Admin_Practicas_Visitas.FormatosEjemplo')
            ->with('formatos',$formatos);
    }

    public function indexFormatosPlantilla(){
        $formatos = VisitaFormato::where('tipo','Plantilla')->orderBy('estado','desc')->orderBy('id','desc')->get();

        return view('Pantallas_Admin_Practicas_Visitas.FormatosPlantilla')
            ->with('formatos',$formatos);
    }

    public function indexFormatosCalendarioVisitas(){
        $formatos = VisitaFormato::where('tipo','Calendario')->orderBy('estado','desc')->orderBy('id','desc')->get();

        return view('Pantallas_Admin_Practicas_Visitas.FormatosCalendarioVisitas')
            ->with('formatos',$formatos);
    }
/*--------------------------------------------------------------------------------------
---------------------------------( MÉTODOS CARRERAS)------------------------------------
----------------------------------------------------------------------------------------*/ 

    public function indexCarrera(){
        $carreras = Carrera::orderBy('estado','desc')->get();
        return view('Pantallas_Admin_Practicas_Visitas.CarrerasIndex')
            ->with('carreras', $carreras);
    }    

    public function  registrarCarrera(){
        return view('Pantallas_Admin_Practicas_Visitas.CarrerasRegistrar');
    }
    
    public function  guardarCarrera(Request $request){
        $carrera = Carrera::create($request->input());

        return redirect()->action('AdminPracSolicitudesController@indexCarrera');
    } 

    public function editarCarrera(Carrera $carrera){
        
        return view('Pantallas_Admin_Practicas_Visitas.CarrerasEditar')
            ->with('carrera', $carrera);
    }

    public function actualizarCarrera(Carrera $carrera, Request $request){
        $validateData = $request->validate([
            'nombre' => 'required',
            'estado' => 'required',
        ]);
        
        $carrera->fill($validateData);
        $carrera->save();

        return redirect()->action('AdminPracSolicitudesController@indexCarrera');
    }

/*--------------------------------------------------------------------------------------
---------------------------------(  MÉTODOS GRUPO )------------------------------------
----------------------------------------------------------------------------------------*/ 

    public function indexGrupo(){
        $grupos = Grupo::orderBy('carrera_id')->orderby('secuencia')->get();
        return view('Pantallas_Admin_Practicas_Visitas.GruposIndex')
            ->with('grupos', $grupos);
    }    

    public function  registrarGrupo(){
        $carreras = Carrera::where('estado','1')->get()->pluck('nombre', 'id');

        return view('Pantallas_Admin_Practicas_Visitas.GruposRegistrar')
            ->with('carreras', $carreras);
    }

    public function  guardarGrupo(Request $request){
        $grupo = Grupo::create($request->input());

        return redirect()->action('AdminPracSolicitudesController@indexGrupo');
    } 

    public function editarGrupo(Grupo $grupo){
        $carreras = Carrera::where('estado','1')->get()->pluck('nombre', 'id');

        return view('Pantallas_Admin_Practicas_Visitas.GruposEditar')
            ->with('carreras', $carreras)
            ->with('grupo',$grupo);
    }

    public function actualizarGrupo(Grupo $grupo, Request $request){
        $validateData = $request->validate([
            'secuencia' => 'required',
            'carrera_id' => 'required',
            'estado' => 'required',
        ]);
        
        $grupo->fill($validateData);
        $grupo->save();

        return redirect()->action('AdminPracSolicitudesController@indexGrupo');
    }

}
