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
    return view('Pantallas_Principales.Index_gnral');
}) -> name('Index_gnral');


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

Route::get('/RegistroA', function (){
    return view('Pantallas_Alumno_Servicio.FormRegistro');
}) -> name('RegistroA');


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
    return view('Pantallas_Admin_Servicio.AdminServicio_Index2');
}) -> name('AdminServicio_Index2');

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

//------------------------FER INICIO------------------------------------

//Ruta Admin Becas Index 
Route::get('/Admin_Becas_Index', function () {
    return view('Pantallas_Admin_Becas.Admin_Becas_Index');
}) -> name('Admin_Becas_Index');

//Ruta Validacion_Alumno_Becas
Route::get('/Validacion_Alumno_Becas', function () {
    return view('Pantallas_Admin_Becas.Validacion_Alumno_Becas');
}) -> name('Validacion_Alumno_Becas');

//Ruta Admin Practicas y Visitas Index
Route::get('/Admin_Practicas_Visitas_Index', function () {
    return view('Pantallas_Admin_Practicas_Visitas.Admin_Practicas_Visitas_Index');
}) -> name('Admin_Practicas_Visitas_Index');

//Ruta Admin Practicas y Visitas Index
Route::get('/Validacion_Practicas_Visitas', function () {
    return view('Pantallas_Admin_Practicas_Visitas.Validacion_Practicas_Visitas');
}) -> name('Validacion_Practicas_Visitas');

//------------------------FER TERMINO------------------------------------


//------------------------IVAN INICIO------------------------------------

//Pantalla general
Route::get('/Index_gnral', function (){
    return view('Pantallas_Principales.Index_gnral');
}) -> name('Index_gnral');


//Pantalla general con segunda barra
Route::get('/Index_gnral2', function (){
    return view('Pantallas_Principales.Index_gnral2');
}) -> name('Index_gnral2');

//Pantalla general de servicio
Route::get('/ServicioIndex', function (){
    return view('Pantallas_Principales.ServicioIndex');
}) -> name('ServicioIndex');

//Pantalla general de becas
Route::get('/BecasIndex', function (){
    return view('Pantallas_Principales.BecasIndex');
}) -> name('BecasIndex');

//Pantalla general de practicas
Route::get('/PracticasIndex', function (){
    return view('Pantallas_Principales.PracticasIndex');
}) -> name('PracticasIndex');

//Pantalla Registro
Route::get('/RegisterForm', function (){
    return view('Pantallas_Principales.RegisterForm');
}) -> name('RegisterForm');

//RUTAS PARA EL LOGIN
//Pantalla Login
Route::get('/LoginForm', function (){
    return view('Pantallas_Principales.LoginForm');
}) -> name('LoginForm');

Route::post('LoginForm',function(){
    return 'Post login';
});

//------------------------IVAN TERMINO------------------------------------

//-----------------------SANTOS INICIO-----------------------------------
Route::get('/ConvocatoriaBecas', function (){
    return view('Pantallas_Alumno_Becas.ConvocatoriaBecas');
}) -> name('ConvocatoriaBecas');

Route::get('/FormatosBeca', function (){
    return view('Pantallas_Alumno_Becas.FormatosBeca');
}) -> name('FormatosBeca');

Route::get('/MiBeca', function (){
    return view('Pantallas_Alumno_Becas.MiBeca');
}) -> name('MiBeca');
//-----------------------SANTOS TERMINO----------------------------------



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
