<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;

class MiBecaDatosController extends Controller
{
    public function index(){
        $datos = \DB::table('datos')->select('datos.email','datos.telefono','datos.celular','direccions.alcaldia','direccions.colonia','direccions.calle','direccions.num_ext','direccions.num_int','direccions.cp',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'))->where('datos.id','=','5')
        ->join('direccions','datos.id_direcciones','=','direccions.id')->get();
        return view('Pantallas_Alumno_Becas.MiBeca',compact('datos'));
    }
}
