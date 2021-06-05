<?php

namespace App\Http\Controllers;

use App\Models\informe_mensual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class estadisticaMensualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $files = informe_mensual::where('user', Auth::id())->get();
        return view('Pantallas_Admin_Servicio.docs_estadistica_mensual', compact('files'));
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
        
        
        
        foreach ($files as $file){
            if(Storage::putFileAs('/public/'.$user_id.'/', $file, $file->getClientOriginalName())){

                informe_mensual::create([
                    'nombre' => $file->getClientOriginalName(),
                    'user' => $user_id
                ]);

            }

        }
        Alert::success('¡Éxito! 📦📦📦 ', 'Se subio satisfactoriamente el archivo. ');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = informe_mensual::whereid_informe_mensuals($id_informe_mensuals)->firstOrFail();
        $user_id = Auth::id();

        if ($file->user == $user_id) {
            return redirect('/storage'.'/'.$user_id.'/'.$file->nombre);
            # code...
        } else {
            Alert::error('¡Error! 📢📢📢 ', 'No tienes permisos para ver el archivo.');
            return back();
        }
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
