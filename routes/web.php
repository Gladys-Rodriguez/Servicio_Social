<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('home');
}) -> name('home');*/

/*Route::get('/Servicio_Social/Datos', function (){
    return view('Servicio');
}) -> name('Servicio');*/

//Route::post('/Servicio', 'Datos@save');

/*Route::get('/Servicio_Social', function (){
    return view('Servicio_Inicio');
}) -> name('Servicio_Inicio');

Route::get('/Servicio', function (){
    return view('Servicio');
}) -> name('Servicio');*/

Auth::routes();

//Route::get('/Servicio', [App\Http\Controllers\Datos::class, 'create'])->name('Servicio');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Nuevas rutas

Route::get('/', function () {
    return view('Inicio');
}) -> name('Inicio');

//Ruta para Formatos Administrativos de la diapositiva 12
Route::get('/FormatosAdministrativos', function (){
    return view('FormatosA');
}) -> name('FormatosA');

//Ruta para Documentos para visitas escolares (docentes) diapositiva 19
Route::get('/DocumentosVisitasEscolaresD', function (){
    return view('DocumentosVisitasED');
}) -> name('DocumentosVisitasED');

//Ruta para Documentos para visitas escolares (administrativo) diapositiva 20
Route::get('/DocumentosVisitasEscolaresA', function (){
    return view('DocumentosVisitasEA');
}) -> name('DocumentosVisitasEA');

//Ruta para DOCUMENTOS DE INFORMES DE VISITAS ESCOLARES (DOCENTES) diapositiva 21
Route::get('/DocumentosInformesVisitasEscolaresD', function (){
    return view('DocumentosInformesVED');
}) -> name('DocumentosInformesVED');

//Ruta para DOCUMENTOS DE INFORMES DE VISITAS ESCOLARES (concluidos por DOCENTES) diapositiva 22
Route::get('/DocumentosInformesVisitasEscolaresCD', function (){
    return view('DocumentosInformesVECD');
}) -> name('DocumentosInformesVECD');

//Ruta para DOCUMENTOS DE INFORMES DE VISITAS ESCOLARES (concluidos por DOCENTES) diapositiva 23
Route::get('/DocumentosComprobatorios', function (){
    return view('DocumentosComprobatorios');
}) -> name('DocumentosComprobatorios');

//Ruta para CONVOCATORIAS DE BECAS diapositiva 28
Route::get('/ConvocatoriaBecas', function (){
    return view('ConvocatoriaBecas');
}) -> name('ConvocatoriaBecas');

//Ruta para CONVOCATORIAS DE BECAS diapositiva 29
Route::get('/Comunicados', function (){
    return view('Comunicados');
}) -> name('Comunicados');

//Ruta para Formatos Administrativos prueba de archivos
Route::get('/FormatosAdministrativosPA', function (){
    return view('FormatosAPruebaArchivos');
}) -> name('FormatosAPruebaArchivos');

//Ruta para prueba de subida de archivos
Route::get('/FormatosAdministrativosPA', [App\Http\Controllers\FormatosAController::class, 'index'])->name('FormatosAdministrativosPA');
Route::post('/upload', [App\Http\Controllers\FormatosAFilesController::class, 'store'])->name('user.files.store');


/*Route::get('/', [App\Http\Controllers\AlumnoController::class, 'muestra']);*/

//Ruta Registro Alumno
Route::get('/RegistroAlumno', function (){
    return view('Pantallas_Alumno_Servicio.RegistroAlumno');
}) -> name('RegistroAlumno');

Route::get('/LayoutAlumno', function (){
    return view('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno2');
}) -> name('LayoutAlumno');

Route::get('/AlumnoIndex', function (){
    return view('Pantallas_Alumno_Servicio.Alumno_Index');
}) -> name('AlumnoIndex');


//Ruta post controlador de registro alumno
Route::post('RegistroAlumno', [App\Http\Controllers\AlumnoController::class, 'create'])->name('RegistroAlumnno.create');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/files', [App\Http\Controllers\FilesController::class, 'index'])->name('index');
Route::post('/upload', [App\Http\Controllers\FilesController::class, 'store'])->name('user.files.store');

//Ruta Admin Servicio Index 
Route::get('/AdminIndex', function () {
    return view('Pantallas_Admin_Servicio.AdminServicio_Index');
}) -> name('AdminServicio_Index');

//Ruta Admin Servicio concentrados de informacion

Route::get('/concentrados', function () {
    return view('Pantallas_Admin_Servicio.concentrados');
}) -> name('concentrados');

//Ruta Estadisicas de informacion
Route::get('/estadistica', function () {
    return view('Pantallas_Admin_Servicio.estadistica');
}) -> name('estadistica');

//Ruta validación Documentos Alumno
Route::get('/validacionAlumno', function () {
    return view('Pantallas_Admin_Servicio.validacionAlumno');
}) -> name('validacionAlumno');

//Ruta validacion Reportes
Route::get('/validacionReportes', function () {
    return view('Pantallas_Admin_Servicio.validacionReportes');
}) -> name('validacionReportes');














