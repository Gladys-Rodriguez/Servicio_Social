<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;
use App\Models\User;

class AdminPracSolicitudesController extends Controller
{
    public function index(){
        $datos = \DB::table('solicitudesvisitas')
        ->join('empresas','solicitudesvisitas.id_empresa','=','empresas.id_empresa')
        ->join('direccions','empresas.id_direccions','=','direccions.id_direccions')
        ->join('docentes','solicitudesvisitas.id_docentes','=','docentes.id_docentes')
        ->join('users','docentes.id','=','users.id')
        ->join('datos','docentes.id_datos','=','datos.id_datos')

        ->select('solicitudesvisitas.id_solicitud','datos.nombre','empresas.nombre as empresaN','users.email','solicitudesvisitas.fechaVisita')->get();
        return view('Pantallas_Admin_Practicas_Visitas.Solicitudes_Practicas_Visitas',compact('datos'));
    }
//
   /* public function edit($id)
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
}