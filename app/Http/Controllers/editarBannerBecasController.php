<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerBecasImagen;
use DispatchesJobs, ValidatesRequests;

class editarBannerBecasController extends Controller
{
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
        //
        $bannerBecas= bannerBecasImagen::findOrFail($id);
        return view("Pantallas_Principales.EditarFormBannerBecas", compact("bannerBecas"));
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
        $bannerBecas= bannerBecasImagen::findOrFail($id);

        $request->validate(['ruta' => 'image']);

        $entrada= $request->all();
        if($archivo=$request->file('ruta')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('img/carrusel', $nombre);
            $entrada['ruta']=$nombre;
        }

        $bannerBecas->update($entrada);
        return redirect("/consultaBannerBecas");
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
        $bannerBecas= bannerBecasImagen::findOrFail($id);

        unlink(public_path('img'.'/'.'carrusel'.'/'.$bannerBecas->ruta));

        $bannerBecas->delete();

        return redirect("/consultaBannerBecas");
    }
}
