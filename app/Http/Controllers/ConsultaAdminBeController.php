<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;
use App\Models\User;

class ConsultaAdminBeController extends Controller
{
    public function index(){
        $datos = \DB::table('administradors')
        ->join('datos','administradors.id_datos','=','datos.id_datos')
        ->join('users','administradors.id','=','users.id')
        ->join('rols','users.id_rol','=','rols.id_rol')
        ->select(\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'datos.telefono','users.email','rols.Tipo_rol','users.estado', 'users.id')->where('rols.id_rol','=','3')->get();
        return view('Pantallas_Admin_Master.ConsultaAdminBe',compact('datos'));
    }

    /*public function edit($id)
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
    }*/
    public function destroy($id)
    {
        //
        $dato= User::findOrFail($id);

        $dato->delete();
        return redirect()->back()->with('alert', 'El registro se ha eliminado');
   }
}