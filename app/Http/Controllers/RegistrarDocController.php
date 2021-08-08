<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  
use App\Models\docbecas;  

class RegistrarDocController extends Controller
{
    public function index(){
        $user_id = Auth::id();
        $doc = \DB::table('alumnos')
        ->join('users','alumnos.id_usuarios','=','users.id')
        ->join('solicitud_becas','alumnos.id_alumnos','=','solicitud_becas.id_alumnos')
        ->where('users.id',$user_id)
        ->get();
        return view('Pantallas_Alumno_Becas.RegistrarDoc',compact('doc'));
    }
    public function guardarDoc(Request $request)
    {
        $doc = docbecas::create([
            'ruta' => '',
            'validacion' => false,
            'observaciones' => '',
            'solicitud_id' =>$request->input ('solicitud_id'),
            'nombre_doc' => $request->input ('nombre_doc'),
        ]);
        $doc->ruta=$request->file('ruta')->store('public/DocumentosVisitas');
        $doc->save();
        return view('Pantallas_Alumno_Becas.FormatosBeca');
    }

}