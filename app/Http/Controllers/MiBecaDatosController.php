<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;

class MiBecaDatosController extends Controller
{
    public function index(){
        $datos = \DB::table('datos')
        ->join('direccions','datos.id_direcciones','=','direccions.id')
        ->join('alumnos','datos.id','=','alumnos.id_datos')
        ->select('alumnos.semestre','alumnos.carrera','alumnos.grupo','alumnos.turno','datos.email','datos.id_direcciones','datos.telefono','datos.celular','direccions.alcaldia','direccions.colonia','direccions.calle','direccions.num_ext','direccions.num_int','direccions.cp',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'))->where('datos.id','=','5')->get();
        return view('Pantallas_Alumno_Becas.MiBeca',compact('datos'));
    }
}
