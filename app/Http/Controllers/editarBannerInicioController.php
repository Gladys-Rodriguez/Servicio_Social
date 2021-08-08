<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerInicioImagen;

class editarBannerInicioController extends Controller
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
        $this->middleware('adminmaster',['only'=> ['index']]);
    }
    
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
        $bannerInicio= bannerInicioImagen::findOrFail($id);
        return view("Pantallas_Principales.EditarFormBannerInicio", compact("bannerInicio"));
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
        $bannerInicio= bannerInicioImagen::findOrFail($id);

        $entrada= $request->all();
        if($archivo=$request->file('ruta')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('img/carrusel', $nombre);
            $entrada['ruta']=$nombre;
        }

        $bannerInicio->update($entrada);
        return redirect("/consultaBannerInicio");
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
        $bannerInicio= bannerInicioImagen::findOrFail($id);

        unlink(public_path('img'.'/'.'carrusel'.'/'.$bannerInicio->ruta));

        $bannerInicio->delete();

        return redirect("/consultaBannerInicio");
    }
}
