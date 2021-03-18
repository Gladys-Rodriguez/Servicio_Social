<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Datos extends Controller
{
    //
    public function save(Request $request)
    {
        //print_r($request->input());
        return view('Servicio');
    }



    public function create(Request $request)
    {
        return view('Servicio');
    }
}
