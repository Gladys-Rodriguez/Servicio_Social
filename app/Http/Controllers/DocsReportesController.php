<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\reporte;
use App\Models\dato;
// use App\Models\User;
// use App\Models\Alum_Datos, App\Models\alumno ;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DocsReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $files = reporte::where('user', Auth::id())->get();
        return view('Pantallas_Alumno_Servicio.Expediente_Reportes', compact('files'));
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
                    reporte::create([
                        'nombre_doc' => $file->getClientOriginalName(),
                        'user' => $user_id,
                        'tipo_doc' => $tipo,

                ]);

            }
        }



            Alert::success('¡Éxito! 📦📦📦 ', 'Se subio satisfactoriamente el archivo. ');
            return back();
            //return redirect()->route('uploaddocexpediente.index');



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
