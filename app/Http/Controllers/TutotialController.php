<?php

namespace App\Http\Controllers;

use App\Models\Tutotial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
class TutotialController extends Controller
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
        DB::transaction(function () use ($request) {

            $id_direccions = DB::table('tutorials')->insertGetId([
                'url' => $request->input('url'),
                'estado' => 1,
                'nombre_tuto' => $request->input('nombre_tuto'),

            ]);

        });
        Alert::success('¡Éxito! 📦📦📦 ', 'Se subio satisfactoriamente el archivo. ');
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutotial  $tutotial
     * @return \Illuminate\Http\Response
     */
    public function show(Tutotial $tutotial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutotial  $tutotial
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutotial $tutotial)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutotial  $tutotial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $boleta = $request->input("boleta_alumno");

        $registro = DB::table('tutorials')
        ->update([

            'url' => $request -> input('url'),
            'nombre_tuto' => $request -> input('nombre_tuto'),
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutotial  $tutotial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutotial $tutotial)
    {
        //
    }
}
