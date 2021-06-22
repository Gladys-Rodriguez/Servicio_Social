<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use App\Models\Docente;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class VisitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('docente',['only'=> ['index']]);
    }

    public function index(){
        $visitas = Visita::all();
        return view('Pantallas_Docente_Practicas_Visitas.index')
            ->with('visitas', $visitas) ;
    }

    public function crear(){
        $empresas = DB::table('empresas')->get()->pluck('nombre','id');
        $grupos = DB::table('grupos')->get()->pluck('secuencia','id');

        return view('Pantallas_Docente_Practicas_Visitas.create')
            ->with('empresas', $empresas)
            ->with('grupos', $grupos);
    }

    public function guardar(Request $request){
        $visita = Visita::create($request->input());
        return redirect()->action('VisitaController@index');
    }

    public function ver(Visita $visita){
        return view('Pantallas_Docente_Practicas_Visitas.show')
            ->with('visita', $visita);
    }

    public function editar(Visita $visita){
        $empresas = DB::table('empresas')->get()->pluck('nombre','id');
        $grupos = DB::table('grupos')->get()->pluck('secuencia','id');

        return view('Pantallas_Docente_Practicas_Visitas.edit')
            ->with('empresas', $empresas)
            ->with('grupos', $grupos);
    }

    public function actualizar(Request $request, Visita $visita){

    }

    public function mostrarEmpresas(){
        $empresas = Empresa::paginate(1);
        
        return view('Pantallas_Docente_Practicas_Visitas.empresas')
            ->with('empresas', $empresas);
    }

    public function getLogout()
    {
        //
        Auth::logout();
        return redirect('/');
    }
}
