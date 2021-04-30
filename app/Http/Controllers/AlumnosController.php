<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dato;
use App\Models\Usuario;
use App\Models\alumno;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = dato::all();
        $datad = array("lista_datos" => $datos);
        //$usuarios = Usuario::all();
        //$datau = array("lista_usuarios" => $usuarios);
        return response()->view('Pantallas_Alumno_Servicio/RegistroAlumno', compact('datos'));
        //return response()->view('Pantallas_Alumno_Servicio/RegistroAlumno', compact('usuarios'));
        //return view('/Pantallas_Alumno_Servicio/RegistroAlumno');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$alumno = new alumno();

        //$alumno->id_alumnos = $request->id_usuarios;;
        //$alumno->carrera = $request->carrera;
        //$alumno->semestre = $request->semestre;
        //$alumno->grupo = $request->grupo;
        //$alumno->turno = $request->turno;
        //$alumno->id_usuarios = $request->id_usuarios;
        //$alumno->id_datos = $request->id_datos;

        //$alumno->save();

       /* $alumno_id = $request->input("");
        $carrera = $request->input("carrera");
        $semestre = $request->input("semestre");
        $grupo = $request->input("grupo");
        $turno = $request->input("turno");*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
