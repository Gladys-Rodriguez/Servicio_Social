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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('serviciosocial',['only'=> ['index']]);
    }
    
    
    public function index($id)
    {
        //

        $boleta = $id;
        //var_dump($busqueda);
        //$boleta = session('boleta');
        $busqueda=DB::table('servicios')
        ->join('alumnos', 'servicios.id_alumnos', 'alumnos.id_alumnos')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->join('dependencias', 'servicios.id_dependencias', 'dependencias.id_dependencias')
        ->join('direccions', 'dependencias.id_direcciones', 'direccions.id_direccions')
        ->where('alumnos.id_usuarios', $id)
        ->get();
        $registro=DB::table('registros')
        ->join('alumnos', 'registros.id_alumnos', 'alumnos.id_alumnos')
        ->where('alumnos.id_usuarios', $id)
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

       $matricula=DB::table('servicios')
        ->where('id_servicios', $id)
        ->join('alumnos', 'servicios.id_alumnos', 'alumnos.id_alumnos')
        ->first()->id_usuarios;



        //var_dump($matricula);
        //return redirect()->action([ListadoAlumnosController::class, 'index']);
        return redirect()->route('DatosServicio.index',[$matricula]);

    }

    public function update_registro(Request $request, $id)
    {
        $boleta = $request->input("boleta_alumno");

        $registro = DB::table('registros')->where('id_registros', $id)
        ->update([
            'status_ss' => $request->input('status_ss'),
            'fecha_envio' => $request -> input('fecha_envio'),
            'observaciones' => $request -> input('observaciones'),
        ]);

        //return redirect()->action([ListadoAlumnosController::class, 'index']);
        return redirect()->route('DatosServicio.index',[$boleta]);
    }

    public function update_liberacion(Request $request, $id)
    {
        $boleta = $request->input("boleta_alumno");

        $registro = DB::table('liberacions')->where('id_liberacions', $id)
        ->update([
            'estado' => $request->input('estado'),
            'fecha_envio' => $request -> input('fecha_envio'),
            'observaciones' => $request -> input('observaciones'),
        ]);

        //return redirect()->action([ListadoAlumnosController::class, 'index']);
        return redirect()->route('DatosServicio.index',[$boleta]);
    }


    public function docs($id){
        $alumno = DB::table('alumnos')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->join('registros', 'alumnos.id_alumnos', 'registros.id_alumnos')
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
