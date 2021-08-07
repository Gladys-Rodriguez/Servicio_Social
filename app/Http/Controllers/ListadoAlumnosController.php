<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumno;
use App\Models\servicio;

use Illuminate\Support\Facades\DB;
class ListadoAlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const PAGINACION=10;
    public function index(Request $request)
    {
        $search=$request->get('search');

        $busqueda=DB::table('registros')
        ->join('servicios', 'registros.id_servicios', 'servicios.id_servicios')
        ->join('alumnos', 'servicios.id_alumnos', 'alumnos.id_alumnos')
        ->join('users', 'alumnos.id_usuarios', 'users.id')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->where('alumnos.id_usuarios', 'LIKE', '%'.$search.'%')
        ->where ('registros.status_s', 1)
        ->paginate($this::PAGINACION);


        return view("Pantallas_Admin_Servicio.ListaAlumnos", compact("search","busqueda"));

    }
        //$alumnos = alumno::all();

    public function consultar()
    {



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
    public function show()
    {

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
