<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerServicioImagen;
use DispatchesJobs, ValidatesRequests;

class RegistroBannerServicio extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('serviciosocial',['only'=> ['index']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

      /*Primer forma
      $registro= new bannerServicioImagen;

      $registro->ruta=$request->ruta;
      $registro->save();
      return redirect('Registro_exitoso');*/

     $request->validate(['ruta' => 'image']);

        $entrada= $request->all();
        if($archivo=$request->file('ruta')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('img/carrusel', $nombre);
            $entrada['ruta']=$nombre;
        }

        bannerServicioImagen::create($entrada);



        return redirect('Registro_exitosoBannersServicio');

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
