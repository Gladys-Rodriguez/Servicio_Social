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
    
    public function registrarTipoDocumento(){       //Método CREATE()
        return view('Pantallas_Admin_Practicas_Visitas.TipoDocumentoRegistrar');
    }

    public function guardarTipoDocumento(Request $request){
        $tipo_documento = TipoDocumento::create($request->input());

        return redirect()->action('AdminPracSolicitudesController@indexTipoDocumento');
    }

    public function indexTipoDocumento(){
        $documentos = TipoDocumento::where('tramite', 'Visitas Escolares')
            ->orderby('estado','desc')->orderby('etapa')->paginate(2);

        return view('Pantallas_Admin_Practicas_Visitas.TipoDocumentoIndex')
            ->with('documentos', $documentos);
    }
}
