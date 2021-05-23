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

class registro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* codigo de Gladys
        $id_users = Auth::user()->id;
        $alumnos=DB::table('alumnos')->where('id_usuarios',$id_users)->get();
        $users=DB::table('users')->where('id',$id_users)->get();
        $datos=DB::table('datos')
        ->join('alumnos', 'datos.id_datos', 'alumnos.id_datos')
        ->where('alumnos.id_usuarios',$id_users)
        ->get();
       // echo "<prev>";
      //  print_r($datos);
      //  $datos['datos']=alumno::join('datos','datos.id_datos', '=', 'alumnos.id_datos')->get();

        return view('Pantallas_Alumno_Servicio.Index_Alumno', compact('alumnos', 'users', 'datos')); */


        $id_users = Auth::user()->id;
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

      /*return $request->all();
      $registro= new User;

      $validated = $request->validate([
        'email' => 'unique:users',
       ]);

      $registro->id=$request->id;
      $registro->name=$request->name;
      $registro->email=$request->email;
      $registro->password=bcrypt($request->password);
      //$registro->password=bcrypt($request->password);
      $registro->id_rol= 7;

      $registro->save();
      return redirect('Registro_exitoso'); */

      //$id_rol = Rol::find(5);
      //$id_rol = DB::table('users')->where('id_rol', 5);

      $validated = $request->validate([
        'email' => 'unique:users',
        'email' => 'unique:users',
       ]);

      DB::transaction(function () use ($request) {

        $id_users = DB::table('users')->insertGetId([
            'id' => $request->input('id'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'id_rol' => 5,
        ]);

        $id_datos = DB::table('datos')->insertGetId([
            'nombre' => $request->input('nombre'),
            'ap_paterno' => $request->input('ap_paterno'),
            'ap_materno' => $request->input('ap_materno'),
            'telefono' => $request->input('telefono'),
            'celular' => $request->input('celular'),
        ]);

        $id_direccions = DB::table('direccions')->insertGetId([
            'ciudad' => $request->input('ciudad'),
            'alcaldia' => $request->input('alcaldia'),
            'colonia' => $request->input('colonia'),
            'calle' => $request ->input ('calle'),
            'num_ext' => $request -> input ('num_ext'),
            'num_int' => $request -> input ('num_int'),
            'cp' => $request -> input ('cp'),
        ]);

        $id_alumno = DB::table('alumnos')->insertGetId([
            'carrera' => $request->input('carrera'),
            'semestre' => $request->input('semestre'),
            'grupo' => $request->input('grupo'),
            'turno' => $request ->input ('turno'),
            'id_datos' => $id_datos,
            'id_usuarios' => $id_users,
            'id_direccions' => $id_direccions,
        ]);
      });

      return redirect('Registro_exitoso');



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
