<?php

namespace App\Http\Controllers;

use App\Models\informe_trimestral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class estadisticaTrimestral extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $files = informe_trimestral::where('user', Auth::id())->get();
        return view('Pantallas_Admin_Servicio.docs_concentrados_trimestral', compact('files'));
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

                informe_trimestral::create([
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
        //
        $file = informe_trimestral::whereid_informe_trimestrals($id_informe_trimestrals)->firstOrFail();
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
