<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerPracticasImagen;
use DB;

class consultaBannerPracticasController extends Controller
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
        $this->middleware('practicas',['only'=> ['index']]);
    }


    public function index()
    {
        //
        /*$bannerPracticas= bannerPracticasImagen::all();
        return view("Pantallas_Principales.consultaBannerPracticas", compact("bannerPracticas"));*/
        $bannerPracticas = DB::table('banner_practicas_imagens')
        ->select('*')
        ->where('estado', 1)
        ->get();
        return view("Pantallas_Principales.consultaBannerPracticas", compact("bannerPracticas"));
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
