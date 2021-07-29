<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\View;

use App\Models\dato;
use App\Models\Usuario;
use App\Models\alumno;
use App\Models\servicio;
use App\Models\dependencia;
use App\Models\direccion;

class RegistroServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $id)
    {
        //
        //session(['boleta' => $request->boleta]);
        $boleta = $id;

        $busqueda=DB::table('servicios')
        ->join('alumnos', 'servicios.id_alumnos', 'alumnos.id_alumnos')
        ->join('dependencias', 'servicios.id_dependencias', 'dependencias.id_dependencias')
        ->join('direccions', 'dependencias.id_direcciones', 'direccions.id_direccions')
        ->where('alumnos.id_usuarios', $id)
        ->get();

    return view('Pantallas_Admin_Servicio.DatosServicio ', compact("boleta","busqueda"));



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
