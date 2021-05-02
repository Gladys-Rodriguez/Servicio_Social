<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('Pantallas_Docente_Practicas_Visitas.IndexVisitas');
    }
}
