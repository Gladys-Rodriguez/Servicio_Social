<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;
use App\Models\User;
use App\Models\Visita;
use App\Models\VisitaDocumento;

class ValidacionDocPraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('practicas',['only'=> ['index']]);
    }
    
    public function index(){
        $datos = \DB::table('visitas')
        ->join('empresas','visitas.empresa_id','=','empresas.id')
        ->join('grupos_visitas','visitas.id','=','grupos_visitas.visita_id')
        ->join('grupos','grupos_visitas.grupo_id','=','grupos.id')
        ->join('carreras','grupos.carrera_id','=','carreras.id')
        ->join('direccions','empresas.direccion_id','=','direccions.id_direccions')
        ->join('docentes','visitas.docente_id','=','docentes.id')
        ->join('users','docentes.user_id','=','users.id')
        ->join('datos','docentes.dato_id','=','datos.id_datos')

        ->select('visitas.observaciones','visitas.id as id',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'empresas.nombre as empresaN','users.email','grupos.secuencia','visitas.fecha_visita')->where('visitas.validacion','1')->get();
        return view('Pantallas_Admin_Practicas_Visitas.Validacion_Practicas_Visitas',compact('datos'));
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
        ->select('visitas.observaciones',\DB::raw('CONCAT(direccions.calle,", num_ext:",direccions.num_ext,", num_int:",direccions.num_int,", c.p ",direccions.cp,", Col.",direccions.colonia,", ",direccions.alcaldia,", ",direccions.ciudad,".") as fulldir'),'carreras.nombre as carrera','grupos_visitas.cantidad_alumnos','visitas.id as id','users.id as matricula',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'empresas.nombre as empresaN','users.email','grupos.secuencia','visitas.fecha_visita')
        ->where('visitas.id',$id)
        ->get();
        $doc = \DB::table('visita_documentos')
        ->join('tipo_documentos','visita_documentos.tipo_documento_id','=','tipo_documentos.id')
        ->select('visita_documentos.id as id','visita_documentos.visita_id','visita_documentos.tipo_documento_id','visita_documentos.ruta','visita_documentos.validacion','visita_documentos.observaciones','tipo_documentos.nombre')
        ->where('visita_documentos.visita_id',$id)
        ->get();

        return view("Pantallas_Admin_Practicas_Visitas.ValidacionV2", compact('nuevo','datos','doc'));
    }
    public function update(Request $request, $id)
    {
        //
        $doc= VisitaDocumento::findOrFail($id);
        $doc->update($request->all());
        return redirect("/Validacion_Practicas_Visitas");
    }
}