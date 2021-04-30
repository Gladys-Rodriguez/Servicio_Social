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

// ************************************* RUTAS    DE    GLADYS    *******************************************



/*Route::get('/', [App\Http\Controllers\AlumnoController::class, 'muestra']);*/

//Ruta Registro Alumno
Route::get('/RegistroAlumno', function (){
    return view('Pantallas_Alumno_Servicio.RegistroAlumno');
}) -> name('RegistroAlumno');
Route::get('/RegistroAlumno/Nuevo_Registro', function (){
    return view('Pantallas_Alumno_Servicio.Registros.NuevoRegistro');
}) -> name('Nuevo Registro');



//Ruta para obtener los datos desde el controlador

Route::get('RegistroAlumno', [App\Http\Controllers\AlumnosController::class, 'index'])->name('RegistroAlumno.index');
Route::post('RegistroAlumno', [App\Http\Controllers\AlumnosController::class, 'store'])->name('RegistroAlumno.store');
Auth::routes();
//Ruta de controlador para guardar datos de un formulario
//Route::post('DatosAlumno', [App\Http\Controllers\AlumnoController::class, 'create'])->name('DatosAlumnno.create');
Route::resource('direcciones', "DireccionsController");
Route::resource('alumnos', "AlumnosController");




// ************************************* FIN   RUTAS    DE    GLADYS    *******************************************

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

//------------------------FER INICIO------------------------------------

//Ruta Admin Becas Index3
Route::get('/Admin_Becas_Index3', function () {
    return view('Pantallas_Admin_Becas.Admin_Becas_Index3');
}) -> name('Admin_Becas_Index3');

//Ruta Validacion_Alumno_Becas
Route::get('/Validacion_Alumno_Becas', function () {
    return view('Pantallas_Admin_Becas.Validacion_Alumno_Becas');
}) -> name('Validacion_Alumno_Becas');

//Ruta Admin Practicas y Visitas Index
Route::get('/Admin_Practicas_Visitas_Index2', function () {
    return view('Pantallas_Admin_Practicas_Visitas.Admin_Practicas_Visitas_Index2');
}) -> name('Admin_Practicas_Visitas_Index2');


//Ruta Validacion Practicas y Visitas Index
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

Route::get('/Logueado', function (){
    return view('Pantallas_Principales.Logueado');
}) -> name('Logueado');

Route::post('/login/(idd)', [App\Http\Controllers\loginPrueba::class, 'authenticate'])->name('loginPrueba.authenticate'); //aqui se edita la pantalla de alcance

Route::get('/LoginFormPrueba', function (){
    return view('Pantallas_Principales.LoginFormPrueba');
}) -> name('LoginFormPrueba');

//Pantalla general con segunda barra
Route::get('/Carrusel2', function (){
    return view('Pantallas_Principales.PruebaCarrusel');
}) -> name('Carrusel');


//Rutas con ayuda de Omar para el login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/AdminServicio_Index2.blade', [App\Http\Controllers\ServicioSocialController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\BecasController::class, 'getLogout'])->name('logout');
Route::get('/Admin_Becas_Index3.blade', [App\Http\Controllers\BecasController ::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\BecasController::class, 'getLogout'])->name('logout');
Route::get('/Admin_Practicas_Visitas_Index2.blade', [App\Http\Controllers\PracticasController ::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\BecasController::class, 'getLogout'])->name('logout');
Route::get('/RegistroAlumno.blade', [App\Http\Controllers\AlumnoLController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\BecasController::class, 'getLogout'])->name('logout');
//DocenteController

//Vista para prueba de consulta
Route::get('/consultaPrueba', [App\Http\Controllers\consultaController::class, 'index'])->name('home');

//Vista para editar y actualizar datos
//Route::get('/showPrueba', [App\Http\Controllers\editarController::class, 'show'])->name('home');
Route::get('/showPrueba', function (){
    return view('Pantallas_Principales.showPrueba');
}) -> name('showPrueba');


//------------------------IVAN TERMINO------------------------------------

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas Practicas-y-Vistas Docente
Route::get('/VisitasEscolares/Index','DocenteIndexController');
Route::get('/VisitasEscolares/SolicitarVisita','DocenteSolicitarVisitaController');
Route::get('/VisitasEscolares/MisVisitas','DocenteMisVisitasController');
