<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;
use App\Models\User;

class AdminMasterIndexController extends Controller
{
    public function index(){
        $datos = \DB::table('administradors')
        ->join('datos','administradors.id_datos','=','datos.id_datos')
        ->join('users','administradors.id','=','users.id')
        ->join('rols','users.id_rol','=','rols.id_rol')
        ->select('datos.nombre','datos.ap_paterno','datos.ap_materno','datos.telefono','users.email','rols.Tipo_rol','users.estado', 'users.id')->orderBy('rols.id_rol','DESC')->get();
        return view('Pantallas_Admin_Master.Index_Master',compact('datos'));
    }

    public function edit($id)
    {
        //
        $datos= User::findOrFail($id);
        return view("Pantallas_Principales.EditarAdminForm", compact("datos"));
    }

    public function update(Request $request, $id)
    {
        //
        $datos= User::findOrFail($id);
        $datos->update($request->all());
        return redirect("/Index_Master");
    }
}
