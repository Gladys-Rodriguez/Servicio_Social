<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\formatos;
use App\Models\Tutotial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class FormatosController extends Controller
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
        $this->middleware('serviciosocial',['only'=> ['index']]);
    }
    
    public function index()
    {
        //
        $docs= formatos::get();
        $tuto= Tutotial::get();
        //$files = reporte::where('user', Auth::id())->get();
        //var_dump($docs);
        return view('Pantallas_Admin_Servicio.formatos', compact('docs','tuto'));
        //return redirect()->route('Subida_Formatos', [$docs]);
    }

    public function index_Alumno()
    {
        //
        $docs= formatos::get();
        $tuto= Tutotial::get();
        //$files = reporte::where('user', Auth::id())->get();
        //var_dump($docs);
        return view('Pantallas_Alumno_Servicio.Index_AlumnoV2', compact('docs','tuto'));
        //return redirect()->route('Subida_Formatos', [$docs]);
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
        //$user_id = Auth::id();
        $tipo = $request->input('nomDoc');
        $carpeta = "formatos";



        foreach ($files as $file){
            if(Storage::putFileAs('/public/'.$carpeta.'/', $file, $file->getClientOriginalName())){
                    formatos::create([
                        'nombre_doc' => $file->getClientOriginalName(),
                        //'user' => $user_id,
                        'tipo_doc' => $tipo,

                ]);

            }
        }



            Alert::success('¡Éxito! 📦📦📦 ', 'Se subio satisfactoriamente el archivo. ');
            return back();
           // return redirect()->route('SeguimientoReportes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formatos  $formatos
     * @return \Illuminate\Http\Response
     */
    public function show(formatos $formatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formatos  $formatos
     * @return \Illuminate\Http\Response
     */
    public function edit(formatos $formatos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formatos  $formatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formatos $formatos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formatos  $formatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $files=formatos::findOrFail($id);
        unlink(public_path('storage'.'/'.'formatos'.'/'.$files->nombre_doc));
        $files->delete();
       Alert::warning('Se borró satisfactoriamente el archivo. ');
        return back();

    }
}
