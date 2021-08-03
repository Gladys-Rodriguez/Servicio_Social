<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\MiBecaDato;
use App\Models\User;
use App\Models\ConsultaAdminPra;

class ConsultaAdminPraController extends Controller
{
    public function index(){
        $datos = \DB::table('administradors')
        ->join('datos','administradors.id_datos','=','datos.id_datos')
        ->join('users','administradors.id','=','users.id')
        ->join('rols','users.id_rol','=','rols.id_rol')
        ->select(\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'),'datos.telefono','users.email','rols.Tipo_rol','users.estado', 'users.id')->where('rols.id_rol','=','4')->get();
        return view('Pantallas_Admin_Master.ConsultaAdminPra',compact('datos'));
    }
    public function edit($id)
    {
        //
        $datos= User::findOrFail($id);
        $nuevo = \DB::table('administradors')
        ->join('datos','administradors.id_datos','=','datos.id_datos')
        ->join('users','administradors.id','=','users.id')
        ->join('rols','users.id_rol','=','rols.id_rol')
        ->select('datos.nombre','datos.ap_paterno','datos.ap_materno','datos.telefono','datos.celular','users.id as matricula','users.email','users.estado')
        ->where('users.id',$id)
        ->get();

        return view("Pantallas_Admin_Master.EditarAdminPra", compact('nuevo','datos'));
    }
    public function update(Request $request, $id)
    {   
        $Users= User::with('administradors')->findOrFail($id);
        //$datos= User::findOrFail($id);
        $Users -> email = $request->input('email');
        
        $Users->save();

         $datos=\DB::table('administradors')
        ->join('datos', 'administradors.id_datos', 'datos.id_datos')
        ->where('administradors.id',$id)
        ->update([
            'datos.nombre' => $request->input('nombre'),
            'datos.ap_paterno' => $request->input('ap_paterno'),
            'datos.ap_materno' => $request->input('ap_materno'),
            'datos.telefono' => $request->input('telefono'),
            'datos.celular' => $request->input('celular'),
        ]);

        return view("Pantallas_Admin_Master.Index_Master");


       // $alumnos->grupo = $request->input('grupo');



        //$alumnos->save();
        //var_dump($alumnos);


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