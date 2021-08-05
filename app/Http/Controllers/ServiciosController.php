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

class ServiciosController extends Controller
{
    /*public function __construct(){
        $this->middleware('NuevoRegistroMiddleware',['only'=> ['index']]);
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */



    public function index()
    {
        //
        $id_users = Auth::user()->id;
        $alumnos=DB::table('alumnos')->where('id_usuarios',$id_users)->pluck('id_alumnos')->first();

        $serv= DB::table('servicios')
        ->join('alumnos', 'servicios.id_alumnos', 'alumnos.id_alumnos')
        ->where('servicios.id_alumnos', $alumnos)
        ->pluck('servicios.id_alumnos')->first();

       // var_dump($serv);
        if($alumnos == $serv)
        {
            return redirect('Inicio Alumno');
        }
        else{
        return response()->view('Pantallas_Alumno_Servicio/Registros/NuevoRegistro');
    }







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
        $id_users = Auth::user()->id;
        $id_alumnos=alumno::where('id_usuarios',$id_users)->take(1)->get();
        //$id_ser = servicio::select('id_servicios')->take(1)->get();




        DB::transaction(function () use ($request, $id_alumnos) {

        $id_direccions = DB::table('direccions')->insertGetId([
            'ciudad' => $request->input('ciudad'),
            'alcaldia' => $request->input('alcaldia'),
            'colonia' => $request->input('colonia'),
            'calle' => $request ->input ('calle'),
            'num_ext' => $request -> input ('num_ext'),
            'num_int' => $request -> input ('num_int'),
            'cp' => $request -> input ('cp'),
        ]);

        $id_dependencias = DB::table('dependencias')->insertGetId([
            'id_direcciones' => $id_direccions,
            'nombre_depen' => $request->input('nombre_depen'),
            'nom_responsable' => $request->input('nom_responsable'),
            'ap_responsable' => $request->input('ap_responsable'),
            'am_responsable' => $request->input('am_responsable'),
            'telefono' => $request->input('telefono'),
            'email_responsable' => $request->input('email_responsable')
        ]);



        $id_servicios = DB::table('servicios')->insertGetId([
            'id_dependencias' => $id_dependencias,
            'id_alumnos' => $id_alumnos->first()->id_alumnos,
            'No_registro' => $request->input('No_registro'),
            'fecha_inicio' => $request->input('fecha_inicio'),
            'fecha_termino' => $request->input('fecha_termino'),
            'fecha_inscripcion' => $request->input('fecha_inscripcion')
        ]);

        $id_registros = DB::table('registros')->insert([
            'status_ss' => $request->input('status_ss'),
            'fecha_envio' => $request->input('fecha_envio'),
            'observaciones' => $request->input('observaciones'),
            'id_alumnos' => $id_alumnos->first()->id_alumnos,
            'id_servicios' => $id_servicios,
            'status_s' => 1,
        ]);
        $id_liberaciones = DB::table('liberacions')->insert([

            'id_alumnos' => $id_alumnos->first()->id_alumnos,
            'id_servicios' => $id_servicios,
            'estado' => 0,
        ]);

    });

    return redirect('Registro_exitosoServicio');
    /* DB::transaction(function () use ($request) {
            $direccions = direccion::create([
                'ciudad' => $request->input('ciudad'),
                'alcaldia' => $request->input('alcaldia'),
                'colonia' => $request->input('colonia'),
                'calle' => $request ->input ('calle'),
                'num_ext' => $request -> input ('num_ext'),
                'num_int' => $request -> input ('num_int'),
                'cp' => $request -> input ('cp')
            ]);

            dependencia::create([
            'nombre_depen' => $request->input('nombre_depen'),
            'nom_responsable' => $request->input('nom_responsable'),
            'ap_responsable' => $request->input('ap_responsable'),
            'am_responsable' => $request->input('am_responsable'),
            'telefono' => $request->input('telefono'),
            'email_responsable' => $request->input('email_responsable'),
            'id_direcciones' => $direccions->id_direccions
            ]);


        });*/


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
