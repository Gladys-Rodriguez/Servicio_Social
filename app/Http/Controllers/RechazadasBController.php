<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;
use App\Models\User;
use App\Models\solicitud_becas;

class RechazadasBController extends Controller
{
    public function index(){
        $datos = \DB::table('solicitud_becas')
        ->join('alumnos','solicitud_becas.id_alumnos','=','alumnos.id_alumnos')
        ->join('expediente_becas','solicitud_becas.id_expediente_becas','=','expediente_becas.id_expediente_becas')
        ->join('direccions','alumnos.id_direccions','=','direccions.id_direccions')
        ->join('datos','alumnos.id_datos','=','datos.id_datos')
        ->join('users','alumnos.id_usuarios','=','users.id')

        ->select('expediente_becas.Nombre_beca','solicitud_becas.id',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'users.id as mat','users.email',)->where('solicitud_becas.validacion','2')->get();
        return view('Pantallas_Admin_Becas.RechazadasB',compact('datos'));
    }
}