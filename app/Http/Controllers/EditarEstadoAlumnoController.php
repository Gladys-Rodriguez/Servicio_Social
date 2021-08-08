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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('serviciosocial',['only'=> ['index']]);
    }
    
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

        //var_dump($id);
        $Users->save();

         $alumnos=DB::table('alumnos')
        ->join('direccions', 'alumnos.id_direccions', 'direccions.id_direccions')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->join('registros', 'alumnos.id_alumnos', 'registros.id_alumnos')
        ->where('alumnos.id_usuarios',$id)
        ->update([
           'registros.status_s' => $request->input('status_s'),
        ]);

        return view("Pantallas_Admin_Servicio.AdminServicio_Index2");
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
