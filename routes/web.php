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
Route::get('/AdminIndex', [App\Http\Controllers\ServicioController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\ServicioController::class, 'getLogout'])->name('logout');
Route::get('/AdminBecas', [App\Http\Controllers\BecasController::class, 'index'])->name('home');
Route::get('/AdminPracticas', [App\Http\Controllers\PracticasController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/files', [App\Http\Controllers\FilesController::class, 'index'])->name('index');
Route::post('/upload', [App\Http\Controllers\FilesController::class, 'store'])->name('user.files.store');

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

<<<<<<< HEAD
//Ruta documentos concentrados iniciales
Route::get('/docs_concentrados', function () {
    return view('Pantallas_Admin_Servicio.docs_concentrados');
}) -> name('docs_concentrados');


//Ruta Estadisicas de informacion
Route::get('/estadistica', function () {
    return view('Pantallas_Admin_Servicio.estadistica');
}) -> name('estadistica');
=======
//Pantalla general de practicas
Route::get('/PracticasIndex', function (){
    return view('Pantallas_Principales.PracticasIndex');
}) -> name('PracticasIndex');
>>>>>>> 22be4150550ca4a9b83490d329ba4c66097c6830

//Pantalla Registro
Route::get('/RegisterForm', function (){
    return view('Pantallas_Principales.RegisterForm');
}) -> name('RegisterForm');

//Ruta para recibir los datos que enviamos para el registro
Route::resource('Servicio','registro');
Route::post('/registros/(id)', [App\Http\Controllers\registro::class, 'store'])->name('registros.store'); //aqui se edita la pantalla de alcance

//Ruta oara pantalla de registro exitoso
Route::get('/Registro_exitoso', function (){
    return view('Pantallas_Principales.Registro_exitoso');
}) -> name('Registro_exitoso');

//RUTAS PARA EL LOGIN
//Pantalla Login
Route::get('/LoginForm', function (){
    return view('Pantallas_Principales.LoginForm');
}) -> name('LoginForm');

Route::post('/login/(id)', [App\Http\Controllers\login::class, 'store'])->name('login.store'); //aqui se edita la pantalla de alcance

Route::get('admins/login', 'loginUsuario@showLoginForm');

Route::post('/login/(idd)', [App\Http\Controllers\loginPrueba::class, 'authenticate'])->name('loginPrueba.authenticate'); //aqui se edita la pantalla de alcance

//prueba de login con otros modelos
Route::get('admins/login', 'AdministratorsController@showLoginForm');
Route::post('admins/login', 'AdministratorsController@login');

Route::get('/LoginFormPrueba', function (){
    return view('Pantallas_Principales.LoginFormPrueba');
}) -> name('LoginFormPrueba');

//Pantalla general con segunda barra
Route::get('/Carrusel2', function (){
    return view('Pantallas_Principales.PruebaCarrusel');
}) -> name('Carrusel');

//------------------------IVAN TERMINO------------------------------------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
