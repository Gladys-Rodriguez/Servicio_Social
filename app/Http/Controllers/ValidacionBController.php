<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;
use App\Models\User;
use App\Models\solicitud_becas;
use App\Models\docbecas;

class ValidacionBController extends Controller
{
    public function index(){
        $datos = \DB::table('solicitud_becas')
        ->join('alumnos','solicitud_becas.id_alumnos','=','alumnos.id_alumnos')
        ->join('expediente_becas','solicitud_becas.id_expediente_becas','=','expediente_becas.id_expediente_becas')
        ->join('direccions','alumnos.id_direccions','=','direccions.id_direccions')
        ->join('datos','alumnos.id_datos','=','datos.id_datos')
        ->join('users','alumnos.id_usuarios','=','users.id')

        ->select('expediente_becas.Nombre_beca','solicitud_becas.id',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'users.id as mat','users.email',)->where('solicitud_becas.validacion','1')->get();
        return view('Pantallas_Admin_Becas.Validacion_Alumno_Becas',compact('datos'));
    }
    public function edit($id)
    {
        //
        $datos= solicitud_becas::findOrFail($id);
        $nuevo = \DB::table('solicitud_becas')
        ->join('alumnos','solicitud_becas.id_alumnos','=','alumnos.id_alumnos')
        ->join('expediente_becas','solicitud_becas.id_expediente_becas','=','expediente_becas.id_expediente_becas')
        ->join('direccions','alumnos.id_direccions','=','direccions.id_direccions')
        ->join('datos','alumnos.id_datos','=','datos.id_datos')
        ->join('users','alumnos.id_usuarios','=','users.id')
        ->where('solicitud_becas.id',$id)
        ->select('expediente_becas.Nombre_beca','expediente_becas.Fecha_Inicio','expediente_becas.Fecha_Fin','expediente_becas.monto','direccions.alcaldia','direccions.colonia','direccions.calle','direccions.num_ext','direccions.num_int','direccions.cp','direccions.ciudad','expediente_becas.Nombre_beca','solicitud_becas.id',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'users.id as mat','users.email','datos.telefono','datos.celular','alumnos.semestre','alumnos.carrera','alumnos.turno','alumnos.grupo')->get();
        
        $doc = \DB::table('docbecas')
        ->where('docbecas.solicitud_id',$id)
        ->get();
        return view('Pantallas_Admin_Becas.VB2', compact('nuevo','datos','doc'));

    }
    public function update(Request $request, $id)
    {
        //
        $doc= docbecas::findOrFail($id);
        $doc->update($request->all());
        return redirect("/Validacion_Alumno_Becas");
    }
}