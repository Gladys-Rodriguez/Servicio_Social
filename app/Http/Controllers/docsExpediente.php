<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\docs_expedientePrueba;
use App\Models\dato;
// use App\Models\User;
// use App\Models\Alum_Datos, App\Models\alumno ;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
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
        $user_id = Auth::id();

        $liberaciones= DB::table('alumnos')
        ->join('liberacions', 'alumnos.id_alumnos', 'liberacions.id_alumnos')
        ->where('alumnos.id_usuarios', $user_id)
        ->get();
        $alumno = DB::table('alumnos')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->join('registros', 'alumnos.id_alumnos', 'registros.id_alumnos')
        ->where('alumnos.id_usuarios', $user_id)
        ->get();
        return view('Pantallas_Alumno_Servicio.docs_Seguimiento', compact('files','alumno','liberaciones'));
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
            if(Storage::putFileAs('/public/'.$user_id.'/', $file, $file->getClientOriginalName())){
                    docs_expedientePrueba::create([
                        'nombre_doc' => $file->getClientOriginalName(),
                        'user' => $user_id,
                        'tipo_doc' => $tipo,

                ]);

            }
        }



            Alert::success('¡Éxito! 📦📦📦 ', 'Se subio satisfactoriamente el archivo. ');
            //return back();
            return redirect()->route('uploaddocexpediente.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $file = docs_expedientePrueba::whereid($id)->firstOrFail();
        $user_id = Auth::id();

        if ($file->user == $user_id) {
            return redirect('/storage'.'/'.$user_id.'/'.$file->nombre);
            # code...
        } else {
            Alert::error('¡Error! 📢📢📢 ', 'No tienes permisos para ver el archivo.');
            return back();
        }


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
        $docs = docs_expedientePrueba::findOrFail($id);


        //return view('Pantallas_Admin_Servicio.editDocsAlumno',  compact('files'));
        return view('Pantallas_Admin_Servicio.editDocsAlumno',  compact('docs'));

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

        $docs=docs_expedientePrueba::findOrFail($id);
        $docs->estado=$request->input('estado');
        $docs->observaciones=$request->input('observaciones');
        $docs->save();



        //return redirect()->route('lista.edit');
       //return 'Archivo actualizado';
       return redirect()->route('Expediente.docs', $docs->user);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $files=docs_expedientePrueba::findOrFail($id);
        unlink(public_path('storage'.'/'.Auth::id().'/'.$files->nombre_doc));
        $files->delete();
       Alert::warning('Se borró satisfactoriamente el archivo. ');
        return back();

    }
}
