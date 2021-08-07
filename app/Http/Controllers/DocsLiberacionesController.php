<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\docs_liberaciones;
use App\Models\dato;
// use App\Models\User;
// use App\Models\Alum_Datos, App\Models\alumno ;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DocsLiberacionesController extends Controller
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

            //
            $max_size = (int)ini_get('upload_max_size') * 10048;
            $files = $request->file('files');
            $user_id = Auth::id();
            $tipo = $request->input('documento');




            foreach ($files as $file){
                if(Storage::putFileAs('/public/'.$user_id.'/', $file, $file->getClientOriginalName())){
                        docs_liberaciones::create([
                            'nombre_doc' => $file->getClientOriginalName(),
                            'user' => $user_id,
                            'tipo_doc' => $tipo,

                    ]);

                }
            }



                Alert::success('¡Éxito! 📦📦📦 ', 'Se subio satisfactoriamente el archivo. ');
                return back();
                //return redirect()->route('SeguimientoReportes.index');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\docs_liberaciones  $docs_liberaciones
     * @return \Illuminate\Http\Response
     */
    public function show(docs_liberaciones $docs_liberaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\docs_liberaciones  $docs_liberaciones
     * @return \Illuminate\Http\Response
     */
    public function edit( $id){
        $docs = docs_liberaciones::findOrFail($id);


        //return view('Pantallas_Admin_Servicio.editDocsAlumno',  compact('files'));
        return view('Pantallas_Admin_Servicio.EditDocsLiberacion',  compact('docs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\docs_liberaciones  $docs_liberaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $docs=docs_liberaciones::findOrFail($id);
        $docs->estado=$request->input('estado');
        $docs->observaciones=$request->input('observaciones');
        $docs->save();



        //return redirect()->route('lista.edit');
       //return 'Archivo actualizado';
       return redirect()->route('Expediente_Reportes.docs', $docs->user);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\docs_liberaciones  $docs_liberaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $files=docs_liberaciones::findOrFail($id);
        unlink(public_path('storage'.'/'.Auth::id().'/'.$files->nombre_doc));
        $files->delete();
       Alert::warning('Se borró satisfactoriamente el archivo. ');
        return back();

    }
}
