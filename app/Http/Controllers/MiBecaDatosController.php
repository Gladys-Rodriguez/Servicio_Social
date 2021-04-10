<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;

class MiBecaDatosController extends Controller
{
    public function index(){
        $datos = \DB::table('datos')->select('nombre','ap_paterno','ap_materno','email','telefono','celular')->get();
        return view('Pantallas_Alumno_Becas.MiBeca',compact('datos'));
    }
}
