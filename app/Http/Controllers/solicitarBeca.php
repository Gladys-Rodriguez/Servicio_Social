<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitud_becas;

class solicitarBeca extends Controller
{
    public function store(Request $request) {

        $entrada= $request->all();

        solicitud_becas::create($entrada);

        return redirect('FormatosBeca');

      }
}
