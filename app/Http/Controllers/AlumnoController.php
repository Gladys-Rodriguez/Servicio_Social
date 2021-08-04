<?php

namespace App\Http\Controllers;

use App\Models\Alum_Datos, App\Models\alumno ;
use Illuminate\Http\Request;



class AlumnoController extends Controller
{
    //
    public function  dashboard(){
        $alumnos = alumno::count();
        $alumnosProceso = alumno::where('servicio', '0')->count();
        $alumnosFinalizado = alumno::where('servicio', '1')->count();
        $alumnoMatutino = alumno::where('turno', 'matutino')->where('servicio', '0')->count();
        $alumnoMatutinoFinalizado = alumno::where('turno', 'matutino')->where('servicio', '1')->count();
        $alumnoVespertino = alumno::where('turno', 'vespertino')->where('servicio', '0')->count();
        $alumnoVespertinoFinalizado = alumno::where('turno', 'vespertino')->where('servicio', '1')->count();
        $data = ['alumnos' => $alumnos, 'alumnosProceso' => $alumnosProceso, 'alumnosFinalizado' => $alumnosFinalizado, 'alumnoMatutino'  => $alumnoMatutino, 'alumnoMatutinoFinalizado' => $alumnoMatutinoFinalizado, 'alumnoVespertino' => $alumnoVespertino, 'alumnoVespertinoFinalizado' => $alumnoVespertinoFinalizado ];


        return view('Pantallas_Admin_Servicio.estadisticas', $data );
    }
    public function lista(Request $request){

        
        if($request){
            $query = trim($request->get(key: 'search'));
            $alumnos = alumno::where('id', 'LIKE', '%' . $query . '%')
                                    ->orderBy('id', 'asc')
                                    ->get();
                                    return view('Pantallas_Admin_Servicio.ConcentradoInfo', compact('alumnos'),  ['search' => $query]);
        }

       // $alumnos = alumno::all();

       // return view('Pantallas_Admin_Servicio.ConcentradoInfo', compact('alumnos'));

    }

    public function buscar(Request $request){
        $search = $request->input('search');

    }

    public function edit(Request $request){
        $alumnos = alumno::all();

        return view('Pantallas_Admin_Servicio.validacionAlumno',  compact('alumnos'));
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
