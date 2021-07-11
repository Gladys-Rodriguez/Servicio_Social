<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use App\Models\VisitaDocumento;
use App\Models\Docente;
use App\Models\Empresa;
use App\Models\direccion;
use App\Models\Grupo;
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
        $documentos =VisitaDocumento::where('visita_id', $visita->id)->get();
        //Devuelve todos los documentos que coincidan con el ID de la Vista
        
        return view('Pantallas_Docente_Practicas_Visitas.show')
            ->with('visita', $visita)
            ->with('documentos', $documentos);
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


/*---------------------------------------------------------------------------------------- 
--------------------------------( MÉTODOS EMPRESA )---------------------------------------
----------------------------------------------------------------------------------------*/

    public function mostrarEmpresas(){                                     //METODO INDEX()
        $empresas = Empresa::orderBy( 'nombre')->paginate(5);
        
        return view('Pantallas_Docente_Practicas_Visitas.indexEmpresas')
            ->with('empresas', $empresas);
    }

    public function registrarEmpresa(){                                     //METODO CREATE()
        return view('Pantallas_Docente_Practicas_Visitas.registrarEmpresa');
    }

    public function guardarEmpresa(Request $request){                       //METODO STORE()
        $direccion = direccion::create($request->input());
        $empresa = $direccion->empresa()->create($request->input());

        return redirect()->action('VisitaController@registrarSolicitud', ['empresa'=>$empresa->id] );
    }


/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS VISITAS )--------------------------------------
----------------------------------------------------------------------------------------*/    

    public function index(){                                                  //MÉTODO INDEX()
        $visitas = Visita::all();
        return view('Pantallas_Docente_Practicas_Visitas.index')
            ->with('visitas', $visitas) ;
    }

    public function registrarSolicitud(Empresa $empresa){                     //MÉTODO CREATE()
        $user_id = Auth::user()->id;
        $docente = Docente::where('user_id', $user_id)->first();
        
        return view('Pantallas_Docente_Practicas_Visitas.registrarSolicitud')
        ->with('empresa',$empresa)
        ->with('docente', $docente);
    }

    public function guardarSolicitud(Request $request){                      //MÉTODO STORE()
        $visita = Visita::create($request->input());
        
        $visita_documento = VisitaDocumento::create([
            'visita_id' => $visita->id,
            'tipo_documento_id' => 1, //Solicitud-Visita
            'ruta' => '',
            'validacion' => false,
            'observaciones' => '',
        ]);
        $visita_documento->ruta = $request->file('ruta')->store('public/DocumentosVisitas');
        $visita_documento->save();

        return redirect()->action('VisitaController@index');
    }


/*---------------------------------------------------------------------------------------- 
---------------------------------( MÉTODOS GRUPOS )--------------------------------------
----------------------------------------------------------------------------------------*/   

    public function mostrarGrupos(){
        $grupos = Grupo::orderby('secuencia')->paginate(5);

        return view('Pantallas_Docente_Practicas_Visitas.indexGrupos')
            ->with('grupos',$grupos);
    }


    public function inicio() {
        return view('Pantallas_Docente_Practicas_Visitas.inicio');
    }

    public function hola(){
        return "hola";
        
    }


    public function getLogout()
    {
        //
        Auth::logout();
        return redirect('/');
    }
}
