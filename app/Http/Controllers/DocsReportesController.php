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

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('alumno',['only'=> ['index']]);
    }


    public function index()
    {
        //
        $id_users = Auth::user()->id;
        $files=DB::table('docs_reportes')->where('user',$id_users)->get();
        $docs=DB::table('docs_liberaciones')->where('user',$id_users)->get();
        //$files = reporte::where('user', Auth::id())->get();
        return view('Pantallas_Alumno_Servicio.Seguimiento_Reportes', compact('files','docs'));
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
            //return back();
            return redirect()->route('SeguimientoReportes.index');



    }

    public function docs($id){


        $alumno = DB::table('alumnos')
        ->join('datos', 'alumnos.id_datos', 'datos.id_datos')
        ->join('registros', 'alumnos.id_alumnos', 'registros.id_alumnos')
        ->where('alumnos.id_usuarios', $id)
        ->get();

        $docs = DB::table('docs_reportes')
        ->where('user',$id)
        ->get();

        $liberaciones =
        DB::table('docs_liberaciones')
        ->where('user',$id)
        ->get();

        $libera= DB::table('alumnos')
        ->join('liberacions', 'alumnos.id_alumnos', 'liberacions.id_alumnos')
        ->where('alumnos.id_usuarios', $id)
        ->get();
        //var_dump($docs);
        return view('Pantallas_Admin_Servicio.Exp_Reportes', compact("docs","alumno","liberaciones","libera"));

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

    public function edit( $id){
        $docs = reporte::findOrFail($id);


        //return view('Pantallas_Admin_Servicio.editDocsAlumno',  compact('files'));
        return view('Pantallas_Admin_Servicio.editReportes',  compact('docs'));

    }

    public function update(Request $request, $id)
    {

        $docs=reporte::findOrFail($id);
        $docs->estado=$request->input('estado');
        $docs->observaciones=$request->input('observaciones');
        $docs->save();



        //return redirect()->route('lista.edit');
       //return 'Archivo actualizado';
       return redirect()->route('Expediente_Reportes.docs', $docs->user);



    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $files=reporte::findOrFail($id);
        unlink(public_path('storage'.'/'.Auth::id().'/'.$files->nombre_doc));
        $files->delete();
       Alert::warning('Se borró satisfactoriamente el archivo. ');
        return back();

    }
}
