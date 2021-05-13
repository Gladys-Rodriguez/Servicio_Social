<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

use App\Models\dato;
use App\Models\Usuario;
use App\Models\alumno;
use App\Models\servicio;
use App\Models\dependencia;
use App\Models\direccion;

class showController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $Users= User::findOrFail($id);
        //return view("Pantallas_Principales.showPrueba", compact("Users"));

        //$Users = DB::table('alumnos')
        //->join('users','users.id', '=', 'alumnos.id_usuarios')
        //->join('datos', 'datos.id_datos', '=', 'alumnos.id_datos')
        //->join('direccions', 'direccions.id_direccions', '=', 'alumnos.id_direccions')
        //->select('users.id', 'users.email', 'datos.nombre', 'datos.ap_paterno', 'datos.ap_materno', 'datos.telefono', 'datos.celular', 'direccions.ciudad', 'direccions.alcaldia', 'direccions.colonia', 'direccions.calle', 'direccions.num_ext', 'direccions.num_int', 'direccions.cp', 'alumnos.carrera', 'alumnos.semestre', 'alumnos.grupo', 'alumnos.turno')
        //->where('users.id', '=', $id)
        //->get();

        return view("Pantallas_Principales.showPrueba", compact("Users"));

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
