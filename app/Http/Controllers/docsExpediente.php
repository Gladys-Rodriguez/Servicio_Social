<?php

namespace App\Http\Controllers;



use App\Models\docs_expedientePrueba;
use App\Models\dato;
// use App\Models\User;
// use App\Models\Alum_Datos, App\Models\alumno ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lista(Request $request){
        $files = docs_expedientePrueba::all();
        return view('Pantallas_Admin_Servicio.validacionAlumno',  compact('files'));

    }
    public function edit( $id){
        $files = docs_expedientePrueba::findOrFail($id);

        
        return view('Pantallas_Admin_Servicio.editDocsAlumno',  compact('files'));
        

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
        $files=docs_expedientePrueba::findOrFail($id);
        $files->estado=$request->input('estado');
        $files->observaciones=$request->input('observaciones');
        $files->save();
        return redirect()->route('lista.edit');
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
