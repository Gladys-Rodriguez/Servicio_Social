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

class registroRol extends Controller
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

        //return $request->all();
     /* $registro= new User;

      $validated = $request->validate([
        'id' => 'unique:users',
        'email' => 'unique:users',
       ]);

      $registro->id=$request->id;
      //$registro->name=$request->name;
      $registro->email=$request->email;
      $registro->password=bcrypt($request->password);
      //$registro->password=bcrypt($request->password);
      $registro->id_rol=$request->id_rol;

      $registro->save(); */

      DB::transaction(function () use ($request) {

        $id_users = DB::table('users')->insertGetId([
            'id' => $request->input('id'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'id_rol' => $request->input('id_rol'),
            'estado' => $request->input('estado'),
        ]);

        $id_datos = DB::table('datos')->insertGetId([
            'nombre' => $request->input('nombre'),
            'ap_paterno' => $request->input('ap_paterno'),
            'ap_materno' => $request->input('ap_materno'),
            'telefono' => $request->input('telefono'),
            'celular' => $request->input('celular'),
        ]);

        $id_administradors= DB::table('administradors')->insertGetID([
          'descripcion' => $request->input('descripcion'),
          'id_datos'=>$id_datos,
          'id'=>$id_users,
          'Estado' => $request->input('Estado'),

        ]);

      });
      return redirect()->back() ->with('alert', 'Registro Exitoso');
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
