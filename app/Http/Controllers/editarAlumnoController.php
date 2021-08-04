<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Unique;
use App\Models\Usuario;
use App\Models\User;

use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\dato;
use App\Models\alumno;
use App\Models\direccion;

class editarAlumnoController extends Controller
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
        /*$id_users = Auth::user()->id;
        $alumnos=DB::table('alumnos')->where('id_usuarios',$id_users)->get();
        $users=DB::table('users')->where('id',$id_users)->get();
        $datos=DB::table('datos')
        ->join('alumnos', 'datos.id_datos', 'alumnos.id_datos')
        ->where('alumnos.id_usuarios',$id_users)
        ->get();
        $direccions=DB::table('direccions')
        ->join('alumnos', 'direccions.id_direccions', 'alumnos.id_direccions')
        ->where('alumnos.id_usuarios',$id_users)
        ->get();

        return view('Pantallas_Alumno_Servicio.datosPersonalesA', compact('alumnos', 'users', 'datos', 'direccions'));
 */
        $Users= User::findOrFail($id);


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

        $Users= User::with('alumnos')->findOrFail($id);
        //var_dump($id);

         $alumnos=DB::table('alumnos')
        ->join('direccions', 'alumnos.id_direccions', 'direccions.id_direccions')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->where('alumnos.id_usuarios',$id)
        ->get();
        //var_dump($alumnos);



        return view("Pantallas_Principales.EditarAlumnoForm", compact('Users','alumnos'));



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
        $Users= User::with('alumnos')->findOrFail($id);
        $Users -> email = $request->input('email');

        //var_dump($id);
        $Users->save();

         $alumnos=DB::table('alumnos')
        ->join('direccions', 'alumnos.id_direccions', 'direccions.id_direccions')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->join('users', 'alumnos.id_usuarios', 'users.id')
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

            'users.email' => $request->input('email')
        ]);

        return view("Pantallas_Alumno_Servicio.Index_Alumno");


       // $alumnos->grupo = $request->input('grupo');



        //$alumnos->save();
        //var_dump($alumnos);


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
