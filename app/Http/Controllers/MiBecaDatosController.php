<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\docbecas;
use App\Models\solicitud_becas;

class MiBecaDatosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('alumno',['only'=> ['index']]);
    }

    public function index(){
        $user_id = Auth::id();
        $datos = \DB::table('alumnos')
        ->join('direccions','alumnos.id_direccions','=','direccions.id_direccions')
        ->join('datos','alumnos.id_datos','=','datos.id_datos')
        ->join('users','alumnos.id_usuarios','=','users.id')
        ->select('users.email','alumnos.id_alumnos','alumnos.semestre','alumnos.carrera','alumnos.grupo','alumnos.turno','alumnos.id_direccions','datos.telefono','datos.celular','direccions.alcaldia','direccions.colonia','direccions.calle','direccions.num_ext','direccions.num_int','direccions.cp','direccions.ciudad',\DB::raw('CONCAT(datos.nombre," ",datos.ap_paterno," ",datos.ap_materno) as fullname'))
        ->where('users.id',$user_id)
        ->get();
        $sol = \DB::table('solicitud_becas')
        ->join('expediente_becas','solicitud_becas.id_expediente_becas','=','expediente_becas.id_expediente_becas')
        ->join('alumnos','solicitud_becas.id_alumnos','=','alumnos.id_alumnos')
        ->join('users','alumnos.id_usuarios','=','users.id')
        ->where('users.id',$user_id)
        ->get();
        $doc = \DB::table('docbecas')
        ->join('solicitud_becas','docbecas.solicitud_id','=','solicitud_becas.id')
        ->join('alumnos','solicitud_becas.id_alumnos','=','alumnos.id_alumnos')
        ->select('docbecas.id as id','docbecas.ruta','docbecas.validacion as estado','docbecas.observaciones','docbecas.solicitud_id as solicitud','docbecas.nombre_doc')
        ->join('users','alumnos.id_usuarios','=','users.id')
        ->where('users.id',$user_id)
        ->get();
        return view('Pantallas_Alumno_Becas.MiBeca',compact('datos','sol','doc'));
    }
    public function edit($id)
    {
        $user_id = Auth::id();
        $datos= docbecas::findOrFail($id);
        $doc = \DB::table('docbecas')
        ->join('solicitud_becas','docbecas.solicitud_id','=','solicitud_becas.id')
        ->join('alumnos','solicitud_becas.id_alumnos','=','alumnos.id_alumnos')
        ->join('users','alumnos.id_usuarios','=','users.id')
        ->select('solicitud_becas.id as id')
        ->where('users.id',$user_id)
        ->where('docbecas.id',$id)
        ->get();
        return view("Pantallas_Alumno_Becas.EditarDoc", compact('datos','doc'));
    }
    public function update(Request $request, docbecas $visita_documento)
    {
        dd($visita_documento);
        $validateData= docbecas::findOrFail($visita_documento);
        dd($validateData);

        $visita = solicitud_becas::where('id', $request->input('solicitud_id'))->first();
        $validateData = $request->validate([
            'solicitud_id' => 'required',
            'nombre_doc' => 'required',
            'ruta' => 'required',
        ]);

        $visita_documento->fill($validateData);
        $visita_documento->ruta =$request->file('ruta')->store('public/DocumentosVisitas');
        $visita_documento->save();

        return redirect("/FormatosBeca");
    }


    public function destroy($id)
    {
        //
        $dato= docbecas::findOrFail($id);
        //unlink(public_path('storage'.'/'.'DocumentosVisitas'.'/'.$dato->id));

        $dato->delete();
        return redirect()->back()->with('alert', 'El registro se ha eliminado');






   }
}
