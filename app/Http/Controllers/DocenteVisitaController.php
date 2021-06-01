<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use App\Models\VisitaDocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocenteVisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$visitas = DB::table('visitas')->get();
        $visitas = Visita::all();
        return view('Pantallas_Docente_Practicas_Visitas.index')
            ->with('visitas', $visitas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = DB::table('empresas')->get()->pluck('nombre','id');
        return view('Pantallas_Docente_Practicas_Visitas.create')
            ->with('empresas', $empresas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visita = Visita::create($request->input());

        $visita_documento = VisitaDocumento::create([
            'visita_id' => $visita->id,
            'tipo_documento_id' => 1,
            'ruta' => '',
            'validacion' => false,
            'observaciones' => 'Hola2',
        ]);

        $visita_documento->ruta = $request->file('ruta')->store('public/DocumentosVisitas');
        $visita_documento->save();
        
        return redirect()->action('DocenteVisitaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visita = Visita::findOrFail($id);
        $documentos =VisitaDocumento::where('visita_id', $visita->id)->get();
        //dd($documentos);

        return view('Pantallas_Docente_Practicas_Visitas.show')
            ->with('visita', $visita)
            ->with('documentos', $documentos);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function edit(Visita $visita)
    {
        dd($visita);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visita $visita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visita  $visita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visita $visita)
    {
        //
    }
}
