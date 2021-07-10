<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\dato;
use App\Models\Usuario;
use App\Models\alumno;
use App\Models\servicio;
use App\Models\dependencia;
use App\Models\direccion;

class FechasServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        //var_dump($busqueda);
        $boleta = session('boleta');
        $busqueda=DB::table('servicios')
        ->join('alumnos', 'servicios.id_alumnos', 'alumnos.id_alumnos')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->join('dependencias', 'servicios.id_dependencias', 'dependencias.id_dependencias')
        ->join('direccions', 'dependencias.id_direcciones', 'direccions.id_direccions')
        ->where('alumnos.id_usuarios', 'LIKE', '%'.$boleta.'%')
        ->get();
        $registro=DB::table('registros')
        ->join('alumnos', 'registros.id_alumnos', 'alumnos.id_alumnos')
        ->where('alumnos.id_usuarios', 'LIKE', '%'.$boleta.'%')
        ->get();

    return view('Pantallas_Admin_Servicio.RegistroFechas ', compact("boleta","busqueda","registro"));
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
        $servicio =DB::table('servicios')->where('id_servicios', $id)
        ->update([


            'No_registro' => $request->input('No_registro'),
            'fecha_inicio' => $request->input('fecha_inicio'),
            'fecha_termino'  => $request->input('fecha_termino'),
            'fecha_inscripcion'  => $request->input('fecha_inscripcion'),
        ]);

        return redirect()->action([ListadoAlumnosController::class, 'index']);

    }

    public function docs($id){
        $alumno = DB::table('alumnos')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->where('alumnos.id_usuarios', $id)
        ->get();

        $docs = DB::table('docs_expediente_pruebas')
        ->where('user',$id)
        ->get();
        //var_dump($docs);
        return view('Pantallas_Admin_Servicio.Expediente ', compact("docs","alumno"));

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
