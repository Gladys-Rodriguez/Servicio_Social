<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    

class MiBecaDatosController extends Controller
{
    public function index(){
        $user_id = Auth::id();
        $datos = \DB::table('alumnos')
        ->join('direccions','alumnos.id_direccions','=','direccions.id_direccions')
        ->join('datos','alumnos.id_datos','=','datos.id_datos')
        ->join('users','alumnos.id_usuarios','=','users.id')
        ->select('users.email','alumnos.id_alumnos','alumnos.semestre','alumnos.carrera','alumnos.grupo','alumnos.turno','alumnos.id_direccions','datos.telefono','datos.celular','direccions.alcaldia','direccions.colonia','direccions.calle','direccions.num_ext','direccions.num_int','direccions.cp','direccions.ciudad',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'))
        ->where('users.id',$user_id)
        ->get();
        $sol = \DB::table('solicitud_becas')
        ->join('expediente_becas','solicitud_becas.id_expediente_becas','=','expediente_becas.id_expediente_becas')
        ->join('alumnos','solicitud_becas.id_alumnos','=','alumnos.id_alumnos')
        ->join('docbecas','solicitud_becas.id','=','docbecas.solicitud_id')
        ->select('docbecas.id as id','alumnos.id_alumnos','docbecas.ruta','docbecas.validacion as estado','docbecas.observaciones','docbecas.solicitud_id','docbecas.nombre_doc','solicitud_becas.validacion','expediente_becas.Nombre_beca','expediente_becas.Fecha_Inicio','expediente_becas.Fecha_Fin','expediente_becas.monto')
        ->get();
        return view('Pantallas_Alumno_Becas.MiBeca',compact('datos','sol'));
    }
}
