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
        ->join('solicitudesvisitas_grupos','solicitudesvisitas.id_solicitud','=','solicitudesvisitas_grupos.id_solicitud')
        ->join('grupos','solicitudesvisitas_grupos.id_grupo','=','grupos.id_grupo')
        ->join('carreras','grupos.id_carrera','=','carreras.id_carrera')
        ->join('direccions','empresas.id_direccions','=','direccions.id_direccions')
        ->join('docentes','solicitudesvisitas.id_docentes','=','docentes.id_docentes')
        ->join('users','docentes.id','=','users.id')
        ->join('datos','docentes.id_datos','=','datos.id_datos')

        ->select('solicitudesvisitas.id_solicitud',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'empresas.nombre as empresaN','users.email','grupos.grupo','solicitudesvisitas.fechaVisita')->get();
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