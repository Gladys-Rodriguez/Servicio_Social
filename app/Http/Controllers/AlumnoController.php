<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //
    public function muestra()
    {
        return view('Alumno.Registro_Alumno');
    }
}