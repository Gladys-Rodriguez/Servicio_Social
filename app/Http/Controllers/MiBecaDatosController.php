<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;

class MiBecaDatosController extends Controller
{
    public function index(){
        $datos = \DB::table('alumnos')
        ->join('direccions','alumnos.id_direccions','=','direccions.id_direccions')
        ->join('datos','alumnos.id_datos','=','datos.id_datos')
        ->join('users','alumnos.id','=','users.id')
        ->select('users.email','alumnos.semestre','alumnos.carrera','alumnos.grupo','alumnos.turno','alumnos.id_direccions','datos.telefono','datos.celular','direccions.alcaldia','direccions.colonia','direccions.calle','direccions.num_ext','direccions.num_int','direccions.cp','direccions.ciudad',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'))->where('alumnos.id_datos','=','1')->get();
        return view('Pantallas_Alumno_Becas.MiBeca',compact('datos'));
    }
}
