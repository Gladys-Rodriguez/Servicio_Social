<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumno;
use App\Models\servicio;
use App\Models\User;

use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class EditarEstadoAlumnoController extends Controller
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
        $Users= User::with('alumnos')->findOrFail($id);
        //var_dump($id);

         $alumnos=DB::table('alumnos')
        ->join('direccions', 'alumnos.id_direccions', 'direccions.id_direccions')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->join('registros', 'alumnos.id_alumnos', 'registros.id_alumnos')
        ->where('alumnos.id_usuarios',$id)
        ->get();



        return view("Pantallas_Admin_Servicio.EditarEstadoAlumno", compact('Users','alumnos'));
        //

        /*$search=$request->get('search');

        $busqueda=DB::table('registros')
        ->join('servicios', 'registros.id_servicios', 'servicios.id_servicios')
        ->join('alumnos', 'servicios.id_alumnos', 'alumnos.id_alumnos')
        ->join('users', 'alumnos.id_usuarios', 'users.id')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->where('alumnos.id_usuarios', 'LIKE', '%'.$search.'%')
        ->where ('registros.status_s', 1)
        ->paginate($this::PAGINACION);


        return view("Pantallas_Admin_Servicio.ListaAlumnos", compact("search","busqueda"));*/
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
        $Users= User::with('alumnos')->findOrFail($id);
        $Users -> email = $request->input('email');

        //var_dump($id);
        $Users->save();

         $alumnos=DB::table('alumnos')
        ->join('direccions', 'alumnos.id_direccions', 'direccions.id_direccions')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->where('alumnos.id_usuarios',$id)
        ->update([
            'alumnos.carrera' => $request->get('carrera'),
            'alumnos.semestre' => $request->get('semestre'),
            'alumnos.grupo' => $request->input('grupo'),
            'alumnos.turno' => $request->get('turno'),

            'direccions.ciudad' => $request->input('ciudad'),
            'direccions.alcaldia' => $request->input('alcaldia'),
            'direccions.colonia' => $request->input('colonia'),
            'direccions.calle' => $request->input('calle'),
            'direccions.num_ext' => $request->input('num_ext'),
            'direccions.num_int' => $request->input('num_int'),
            'direccions.cp' => $request->input('cp'),

            'datos.nombre' => $request->input('nombre'),
            'datos.ap_paterno' => $request->input('ap_paterno'),
            'datos.ap_materno' => $request->input('ap_materno'),
            'datos.telefono' => $request->input('telefono'),
            'datos.celular' => $request->input('celular'),
        ]);

        return view("Pantallas_Alumno_Servicio.Index_Alumno");
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
