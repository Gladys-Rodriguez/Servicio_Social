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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('docente',['only'=> ['index']]);
    }
    
     public function __invoke(Request $request)
    {
        return view('Pantallas_Docente_Practicas_Visitas.IndexVisitas');
    }
}
