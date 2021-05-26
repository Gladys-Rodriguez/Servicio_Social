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

        $Users= User::findOrFail($id);
        $alumnos=DB::table('alumnos')->where('id_usuarios',$Users)->get();
        /*$alumnos = alumno::where('id_usuarios', $Users)->get();*/
        return view("Pantallas_Principales.EditarAlumnoForm", compact('Users','alumnos'));

       /* $id_users = Auth::user()->$id;
        $alumnos=DB::table('alumnos')->where('id_usuarios',$id_users)->get();
        $Users=DB::table('users')->where('id',$id_users)->get();
        $datos=DB::table('datos')
        ->join('alumnos', 'datos.id_datos', 'alumnos.id_datos')
        ->where('alumnos.id_usuarios',$id_users)
        ->get();
        $direccions=DB::table('direccions')
        ->join('alumnos', 'direccions.id_direccions', 'alumnos.id_direccions')
        ->where('alumnos.id_usuarios',$id_users)
        ->get();
        return view("Pantallas_Principales.EditarAlumnoForm", compact("Users", "alumnos", "datos", "direccions"));*/


        /*$id_users = Auth::user()->$id;
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

        return view('Pantallas_Principales.EditarAlumnoForm', compact('alumnos', 'users', 'datos', 'direccions'));*/
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
        $Users= User::findOrFail($id);
        $Users->update($request->all());
        return redirect("/datosPersonalesA");
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
