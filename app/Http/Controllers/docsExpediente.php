<?php

namespace App\Http\Controllers;



use App\Models\docs_expedientePrueba;
use App\Models\dato;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;



class docsExpediente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $files = docs_expedientePrueba::where('user', Auth::id())->get();
        return view('Pantallas_Alumno_Servicio.docs_Seguimiento', compact('files'));
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
        $max_size = (int)ini_get('upload_max_size') * 10048;
        $files = $request->file('files');
        $user_id = Auth::id();
        $tipo = $request->input('documento');


        foreach ($files as $file){
                    docs_expedientePrueba::create([
                        'nombre_doc' => $file->getClientOriginalName(),
                        'user' => $user_id,
                        'tipo_doc' => $tipo


                ]);

            }

            return "Archivo subido";
          /* return Alert::success('¡Éxito! 📦📦📦 ', 'Se subio satisfactoriamente el archivo. ');
           return back(); */



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
