<?php

namespace App\Http\Controllers;

use App\Models\Alum_Datos, App\Models\alumno ;
use Illuminate\Http\Request;



class AlumnoController extends Controller
{
    //
    public function lista(){

        $alumnos = alumno::all();

        return view('Pantallas_Admin_Servicio.ConcentradoInfo', compact('alumnos'));

    }
    public function muestra()
    {
        return view('Alumno.Registro_Alumno');
    }


    public function create(Request $request)
    {
        $alumno = new Alum_Datos();

        $alumno->No_Boleta = $request->No_Boleta;
        $alumno->Nombre = $request->Nombre;
        $alumno->Ap_Paterno = $request->Ap_Paterno;
        $alumno->Ap_Materno = $request->Ap_Materno;
        $alumno->Carrera = $request->Carrera;
        $alumno->Semestre = $request->Semestre;
        $alumno->Grupo = $request->Grupo;
        $alumno->Turno = $request->Turno;
        $alumno->email = $request->email;

        $alumno->save();

    }
}
