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

Auth::routes(['verify' => true]);

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
//Prueba de Login
Route::get('/LoginPruebaGla', function (){
    return view('Pantallas_Alumno_Servicio.pantallaLogin');
}) -> name('LoginPruebaGla');


/*Route::get('/', [App\Http\Controllers\AlumnoController::class, 'muestra']);*/

//Ruta Registro Alumno
Route::get('/RegistroAlumno', function (){
    return view('Pantallas_Alumno_Servicio.RegistroAlumno');
}) -> name('RegistroAlumno');
Route::get('/FormRegistro', function (){
    return view('Pantallas_Alumno_Servicio.FormRegistro');
}) -> name('FormRegistro');
Route::get('/NuevoRegistro', function (){
    return view('Pantallas_Alumno_Servicio.Registros.NuevoRegistro');
}) -> name('Nuevo Registro');

//Route::get('Index_Alumno', [App\Http\Controllers\registro::class, 'index'])->name('Index_Alumno.index');


//Ruta para obtener los datos desde el controlador

Route::get('RegistroAlumno', [App\Http\Controllers\AlumnosController::class, 'index'])->name('RegistroAlumno.index');
Route::get('NuevoRegistro', [App\Http\Controllers\ServiciosController::class, 'index'])->name('NuevoRegistro.index');
Route::post('RegistroAlumno', [App\Http\Controllers\AlumnosController::class, 'store'])->name('RegistroAlumno.store');
Route::post('NuevoRegistro', [App\Http\Controllers\ServiciosController::class, 'store'])->name('NuevoRegistro.store');
//Auth::routes();
//Ruta de controlador para guardar datos de un formulario
//Route::post('DatosAlumno', [App\Http\Controllers\AlumnoController::class, 'create'])->name('DatosAlumnno.create');
Route::resource('direcciones', "DireccionsController");
Route::resource('alumnos', "AlumnosController");

//Ruta oara pantalla Index Alumno
Route::get('/Index_Alumno', function (){
    return view('Pantallas_Alumno_Servicio.Index_Alumno');
}) -> name('Index_Alumno');


//Ruta oara pantalla Prueba de datos Personales
Route::get('/DatosPersonales', function (){
    return view('Pantallas_Alumno_Servicio.DatosPersonales');
}) -> name('DatosPersonales');


// ************************************* FIN   RUTAS    DE    GLADYS    *******************************************

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

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

//Ruta para subir archivos concentrado inicios

Route::post('/uploadConcentradoInicios', [App\Http\Controllers\concentradoIniciosController::class, 'store'])->name('uploadConcentradoInicios.store');

//Ruta para ver archivos de concentrado inicios
Route::get('/docsConcentradoInicios', [App\Http\Controllers\concentradoIniciosController::class, 'index'])->name('docsConcentradoInicios.index');

//Ruta de archivos pdf
Route::get('/docsConcentradoInicios/{file}', [App\Http\Controllers\concentradoIniciosController::class, 'show'])->name('docsConcentradoInicios.show');

//Ruta para ver archivos de concentrado liberaciones
Route::get('/docsConcentradoLiberaciones', [App\Http\Controllers\concentradoLiberacionesController::class, 'index'])->name('docsConcentradoLiberaciones.index');

//Ruta para subir archivos de liberaciones
Route::post('/uploadConcentradoLiberaciones', [App\Http\Controllers\concentradoLiberacionesController::class, 'store'])->name('uploadConcentradoLiberaciones.store');

//Ruta de archivos pdf
Route::get('/docsConcentradoLiberaciones/{file}', [App\Http\Controllers\concentradoLiberacionesController::class, 'show'])->name('docsConcentradoLiberaciones.show');

//Ruta para ver archivos de concentrado Informes POA
Route::get('/docsConcentradoPOA', [App\Http\Controllers\concentradoPOAController::class, 'index'])->name('docsConcentradoPOA.index');

//Ruta para subir archivos de Informes POA
Route::post('/uploadConcentradoPOA', [App\Http\Controllers\concentradoPOAController::class, 'store'])->name('uploadConcentradoPOA.store');

//Ruta de archivos pdf Informes POA
Route::get('/docsConcentradoPOA/{file}', [App\Http\Controllers\concentradoPOAController::class, 'show'])->name('docsConcentradoPOA.show');


//Ruta Estadisicas de informacion
Route::get('/estadisticas', [App\Http\Controllers\AlumnoController::class, 'dashboard'])->name('estadisticas.dashboard');


//Ruta para ver archivos de Estadistica mensual
Route::get('/docsEstadisticaMensual', [App\Http\Controllers\estadisticaMensualController::class, 'index'])->name('docsEstadisticaMensual.index');

//Ruta para subir archivos de Estadistica mensual
Route::post('/uploadEstadisticaMensual', [App\Http\Controllers\estadisticaMensualController::class, 'store'])->name('uploadEstadisticaMensual.store');

//Ruta de archivos pdf Estadistica Mensual
Route::get('/docsEstadisticaMensual/{file}', [App\Http\Controllers\estadisticaMensualController::class, 'show'])->name('docsEstadisticaMensual.show');

//Ruta para ver archivos de Estadistica trimestral
Route::get('/docsEstadisticaTrimestral', [App\Http\Controllers\estadisticaTrimestral::class, 'index'])->name('docsEstadisticaTrimestral.index');

//Ruta para subir archivos de Estadistica trimestral
Route::post('/uploadEstadisticaTrimestral', [App\Http\Controllers\estadisticaTrimestral::class, 'store'])->name('uploadEstadisticaTrimestral.store');

//Ruta de archivos pdf Estadistica trimestral
Route::get('/docsEstadisticaTrimestral/{file}', [App\Http\Controllers\estadisticaTrimestral::class, 'show'])->name('docsEstadisticaTrimestral.show');

// Ruta Alumno subida de archivos
Route::get('/docexpediente', function () {
    return view('Pantallas_Alumno_Servicio.Alumno_expediente');
}) -> name('docexpediente');

// Subir Archivos alumnos store
Route::post('/uploaddocexpediente', [App\Http\Controllers\docsExpediente::class, 'store'])->name('uploaddocexpediente.store');



//Ruta para ver la solicitud del alumno
Route::get('/docsSolicitudAlumno', [App\Http\Controllers\docsExpediente::class, 'index'])->name('uploaddocexpediente.index');

//Ruta para ver el listado de alumnos
Route::get('/concentradosInfo', [App\Http\Controllers\AlumnoController::class, 'lista'])->name('alumno.lista');

//Ruta para ver Buscar los alumnos 
Route::get('/buscarAlumnos', [App\Http\Controllers\AlumnoController::class, 'buscar'])->name('alumno.buscar');

//Ruta para validar documentos por parte del admin
Route::get('/docsvalidardocalumno', [App\Http\Controllers\docsExpediente::class, 'edit'])->name('uploaddocexpediente.edit');



Route::get('/storagelink', function() {
    Artisan::call('storage:link');
    return 'Done';
});

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

//Ruta Tipo_Alumno_Becas
Route::get('/Tipo_Alumno_Becas', function () {
    return view('Pantallas_Admin_Becas.Tipo_Alumno_Becas');
}) -> name('Tipo_Alumno_Becas');

//Ruta Admin Practicas y Visitas Index
Route::get('/Admin_Practicas_Visitas_Index2', function () {
    return view('Pantallas_Admin_Practicas_Visitas.Admin_Practicas_Visitas_Index2');
}) -> name('Admin_Practicas_Visitas_Index2');


//Ruta Validacion Practicas y Visitas
Route::get('/Validacion_Practicas_Visitas', function () {
    return view('Pantallas_Admin_Practicas_Visitas.Validacion_Practicas_Visitas');
}) -> name('Validacion_Practicas_Visitas');

//Ruta Clasificacion Practicas y Visitas
Route::get('/Solicitudes_Practicas_Visitas', function () {
    return view('Pantallas_Admin_Practicas_Visitas.Solicitudes_Practicas_Visitas');
}) -> name('Solicitudes_Practicas_Visitas');

Route::get('/RechazadasV', function () {
    return view('Pantallas_Admin_Practicas_Visitas.RechazadasV');
}) -> name('RechazadasV');

Route::get('/AceptadasV', function () {
    return view('Pantallas_Admin_Practicas_Visitas.AceptadasV');
}) -> name('AceptadasV');

Route::get('/ValidacionV2', function () {
    return view('Pantallas_Admin_Practicas_Visitas.ValidacionV2');
}) -> name('ValidacionV2');
//------------------------FER TERMINO------------------------------------


//------------------------IVAN INICIO------------------------------------

//Pantalla general
Route::get('/Index_gnral', function (){
    return view('Pantallas_Principales.Index_gnral');
}) -> name('Index_gnral');

//Vista para consulta de imagenes de banner de servicio
Route::get('/Index_gnral', [App\Http\Controllers\indexBannerInicioController::class, 'index'])->name('home');

//Vista para consulta de imagenes de banner de servicio
Route::get('/', [App\Http\Controllers\indexBannerInicioController::class, 'index'])->name('home');


//Pantalla general con segunda barra
Route::get('/Index_gnral2', function (){
    return view('Pantallas_Principales.Index_gnral2');
}) -> name('Index_gnral2');

//Pantalla general de servicio
Route::get('/ServicioIndex', function (){
    return view('Pantallas_Principales.ServicioIndex');
}) -> name('ServicioIndex');

//Pantalla general de servicio
Route::get('/ServicioIndex2', function (){
    return view('Pantallas_Principales.ServicioIndex2');
}) -> name('ServicioIndex2');


//Vista para consulta de imagenes de banner de servicio
Route::get('/ServicioIndex', [App\Http\Controllers\indexBannerServicioController::class, 'index'])->name('home');


//Pantalla general de becas
Route::get('/BecasIndex', function (){
    return view('Pantallas_Principales.BecasIndex');
}) -> name('BecasIndex');

//Vista para consulta de imagenes de banner de servicio
Route::get('/BecasIndex', [App\Http\Controllers\indexBannerBecasController::class, 'index'])->name('home');


//Pantalla general de practicas
Route::get('/PracticasIndex', function (){
    return view('Pantallas_Principales.PracticasIndex');
}) -> name('PracticasIndex');

//Vista para consulta de imagenes de banner de servicio
Route::get('/PracticasIndex', [App\Http\Controllers\indexBannerPracticasController::class, 'index'])->name('home');


//Pantalla Registro
Route::get('/RegisterForm', function (){
    return view('Pantallas_Principales.RegisterForm');
}) -> name('RegisterForm');



//Ruta para recibir los datos que enviamos para el registro
Route::resource('Servicio','registro');
Route::post('/registrosRoles/(id)', [App\Http\Controllers\registroRol::class, 'store'])->name('registrosRoles.store'); //aqui se edita la pantalla de alcance


//Ruta para recibir los datos que enviamos para el registro
Route::resource('Servicio','registro');
Route::post('/registros/(id)', [App\Http\Controllers\registro::class, 'store'])->name('registros.store'); //aqui se edita la pantalla de alcance

//Ruta oara pantalla de registro exitoso
Route::get('/Registro_exitoso', function (){
    return view('Pantallas_Principales.Registro_exitoso');
}) -> name('Registro_exitoso');

//Ruta para el registro de imagenes del home
Route::get('/RegisterBannerInicio', function (){
    return view('Pantallas_Principales.RegisterBannerInicio');
}) -> name('RegisterBannerInicio');

//Ruta para recibir los datos que enviamos para el registro de imagenes de servicio
Route::resource('Inicio','registro');
Route::post('/registrosImagenesI/(id)', [App\Http\Controllers\RegistroBannerInicio::class, 'store'])->name('registrosImagenesI.store'); //aqui se edita la pantalla de alcance


//Ruta para el registro de imagenes de servicio
Route::get('/RegisterBannerServicio', function (){
    return view('Pantallas_Principales.RegisterBannerServicio');
}) -> name('RegisterBannerServicio');

//Ruta para recibir los datos que enviamos para el registro de imagenes de servicio
Route::resource('Servicio','registro');
Route::post('/registrosImagenesS/(id)', [App\Http\Controllers\RegistroBannerServicio::class, 'store'])->name('registrosImagenesS.store'); //aqui se edita la pantalla de alcance

//Ruta para el registro de imagenes de becas
Route::get('/RegisterBannerBecas', function (){
    return view('Pantallas_Principales.RegisterBannerBecas');
}) -> name('RegisterBannerServicio');

//Ruta para recibir los datos que enviamos para el registro de imagenes de becas
Route::resource('Becas','registro');
Route::post('/registrosImagenesB/(id)', [App\Http\Controllers\RegistroBannerBecas::class, 'store'])->name('registrosImagenesB.store'); //aqui se edita la pantalla de alcance

//Ruta para el registro de imagenes de practicas
Route::get('/RegisterBannerPracticas', function (){
    return view('Pantallas_Principales.RegisterBannerPracticas');
}) -> name('RegisterBannerPracticas');

//Ruta para recibir los datos que enviamos para el registro de imagenes de becas
Route::resource('Practicas','registro');
Route::post('/registrosImagenesP/(id)', [App\Http\Controllers\RegistroBannerPracticas::class, 'store'])->name('registrosImagenesP.store'); //aqui se edita la pantalla de alcance


//RUTAS PARA EL LOGIN
//Pantalla Login
Route::get('/LoginForm', function (){
    return view('Pantallas_Principales.LoginForm');
}) -> name('LoginForm');

Route::get('/recover', [App\Http\Controllers\login::class, 'getRecover'] )->name('recover');
Route::post('/recover', [App\Http\Controllers\login::class, 'postRecover'] )->name('recover');

Route::get('/reset', [App\Http\Controllers\login::class, 'getReset'] )->name('reset');
Route::post('/reset', [App\Http\Controllers\login::class, 'postReset'] )->name('reset');


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
Route::get('/Index_Alumno.blade', [App\Http\Controllers\AlumnoLController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\BecasController::class, 'getLogout'])->name('logout');
Route::get('/prueba.blade', [App\Http\Controllers\pruebaController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\pruebaController::class, 'getLogout'])->name('logout');
Route::get('/Index_Master.blade', [App\Http\Controllers\AdminMasterController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\AdminMasterController::class, 'getLogout'])->name('logout');
Route::get('/index.blade', [App\Http\Controllers\DocenteController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\DocenteController::class, 'getLogout'])->name('logout');

//DocenteController


//Vista para prueba de consulta
Route::get('/consultaPrueba', [App\Http\Controllers\consultaController::class, 'index'])->name('home');

//Vista para consulta de alumnos para el super administrador
Route::get('/consultaAlumnoM', [App\Http\Controllers\consultaAlumnoMController::class, 'index'])->name('home');


//Vista para consulta de imagenes de banner de inicio
Route::get('/consultaBannerInicio', [App\Http\Controllers\consultaBannerInicioController::class, 'index'])->name('home');

//Vista para consulta de imagenes de banner de inicio inhabilitadas
Route::get('/consultaBannerInicioInhabilitadas', [App\Http\Controllers\consultaBannerInicioInhabilitadasController::class, 'index'])->name('home');

//Vista para consulta de imagenes de banner de servicio
Route::get('/consultaBannerServicio', [App\Http\Controllers\consultaBannerServicioController::class, 'index'])->name('home');

//Vista para consulta de imagenes inhabilitadas de banner de servicio
Route::get('/consultaBannerServicioInhabilitadas', [App\Http\Controllers\consultaBannerServicioInhabilitadasController::class, 'index'])->name('home');

//Vista para consulta de imagenes de banner de becas
Route::get('/consultaBannerBecas', [App\Http\Controllers\consultaBannerBecasController::class, 'index'])->name('home');

//Vista para consulta de imagenes inhabilitadas de banner de becas
Route::get('/consultaBannerBecasInhabilitadas', [App\Http\Controllers\consultaBannerBecasInhabilitadasController::class, 'index'])->name('home');


//Vista para consulta de imagenes de banner de practicas
Route::get('/consultaBannerPracticas', [App\Http\Controllers\consultaBannerPracticasController::class, 'index'])->name('home');

//Vista para consulta de imagenes inhabilitadas de banner de practicas
Route::get('/consultaBannerPracticasInhabilitadas', [App\Http\Controllers\consultaBannerPracticasInhabilitadasController::class, 'index'])->name('home');

//Vista para consulta de todos los usuarios
Route::get('/consultaUsuarios', [App\Http\Controllers\consultaUsuariosController::class, 'index'])->name('home');


//Vista para editar y actualizar datos
Route::get('/showPrueba/{id}', [App\Http\Controllers\showController::class, 'show'])->name('home');
//Route::get('/showPrueba', function (){
//    return view('Pantallas_Principales.showPrueba');
//}) -> name('showPrueba');

//Pantalla de editar de prueba
//Route::get('/pruebaEditarForm', function (){
//    return view('Pantallas_Principales.pruebaEditarForm');
//}) -> name('pruebaEditarForm');

//editar prueba
Route::get('/pruebaEditarForm/{id}', [App\Http\Controllers\editarController::class, 'edit'])->name('home');
Route::put('/pruebaEditarForm2/{id}', [App\Http\Controllers\editarController::class, 'update'])->name('pruebaEditarForm2.update');

//editar datos de alumno
Route::get('/EditarAlumnoForm/{id}', [App\Http\Controllers\editarAlumnoController::class, 'edit'])->name('home');
Route::put('/EditarAlumnoForm2/{id}', [App\Http\Controllers\editarAlumnoController::class, 'update'])->name('EditarAlumnoController.update');

//editar estado del alumno
Route::get('/EditarAdminForm/{id}', [App\Http\Controllers\AdminMasterIndexController::class, 'edit'])->name('home');
Route::put('/EditarAdminForm2/{id}', [App\Http\Controllers\AdminMasterIndexController::class, 'update'])->name('EditarAlumnoController.update');


//Pantalla de editar de imagenes de inicio
Route::get('/EditarFormBannerInicio', function (){
    return view('Pantallas_Principales.EditarFormBannerInicio');
}) -> name('EditarFormBannerInicio');

Route::get('/EditarFormBannerInicio/{id}', [App\Http\Controllers\editarBannerInicioController::class, 'edit'])->name('home');
Route::put('/EditarFormBannerInicio2/{id}', [App\Http\Controllers\editarBannerInicioController::class, 'update'])->name('EditarFormBannerServicio2.update');
Route::delete('/EditarFormBannerInicio3/{id}', [App\Http\Controllers\editarBannerInicioController::class, 'destroy'])->name('pruebaEditarForm3.update');


//Pantalla de editar de imagenes de servicio
Route::get('/EditarFormBannerServicio', function (){
    return view('Pantallas_Principales.EditarFormBannerServicio');
}) -> name('EditarFormBannerServicio');

Route::get('/EditarFormBannerServicio/{id}', [App\Http\Controllers\editarBannerServicioController::class, 'edit'])->name('home');
Route::put('/EditarFormBannerServicio2/{id}', [App\Http\Controllers\editarBannerServicioController::class, 'update'])->name('EditarFormBannerServicio2.update');
Route::delete('/EditarFormBannerServicio3/{id}', [App\Http\Controllers\editarBannerServicioController::class, 'destroy'])->name('pruebaEditarForm3.update');


//Pantalla de editar de imagenes de becas
Route::get('/EditarFormBannerBecas', function (){
    return view('Pantallas_Principales.EditarFormBannerBecas');
}) -> name('EditarFormBannerBecas');

Route::get('/EditarFormBannerBecas/{id}', [App\Http\Controllers\editarBannerBecasController::class, 'edit'])->name('home');
Route::put('/EditarFormBannerBecas2/{id}', [App\Http\Controllers\editarBannerBecasController::class, 'update'])->name('EditarFormBannerServicio2.update');
Route::delete('/EditarFormBannerBecas3/{id}', [App\Http\Controllers\editarBannerBecasController::class, 'destroy'])->name('pruebaEditarForm3.update');

//Pantalla de editar de imagenes de practicas
Route::get('/EditarFormBannerPracticas', function (){
    return view('Pantallas_Principales.EditarFormBannerPracticas');
}) -> name('EditarFormBannerPracticas');

Route::get('/EditarFormBannerPracticas/{id}', [App\Http\Controllers\editarBannerPracticasController::class, 'edit'])->name('home');
Route::put('/EditarFormBannerPracticas2/{id}', [App\Http\Controllers\editarBannerPracticasController::class, 'update'])->name('EditarFormBannerPracticas2.update');
Route::delete('/EditarFormBannerPracticas3/{id}', [App\Http\Controllers\editarBannerPracticasController::class, 'destroy'])->name('pruebaEditarForm3.update');


Route::get('/prueba', function (){
    return view('Pantallas_Principales.prueba');
}) -> name('prueba');

//Route::get('/datosPersonalesA', [App\Http\Controllers\registro::class, 'index'])->name('datosPersonalesA.index');
Route::get('/DatosPersonales', [App\Http\Controllers\registro::class, 'index'])->name('DatosPersonales.index');

//------------------------IVAN TERMINO------------------------------------

//-----------------------------------SANTOS INICIO-----------------------------------
Route::get('/ConvocatoriaBecas', function (){
    return view('Pantallas_Alumno_Becas.ConvocatoriaBecas');
}) -> name('ConvocatoriaBecas');

Route::get('/FormatosBeca', function (){
    return view('Pantallas_Alumno_Becas.FormatosBeca');
}) -> name('FormatosBeca');

Route::get('/MiBeca','MiBecaDatosController@index');

Route::get('/Index_Master','AdminMasterIndexController@index');
//Pantalla Registro con roles
Route::get('/RegisterFormRoles', function (){
    return view('Pantallas_Admin_Master.RegisterFormRoles');
}) -> name('RegisterFormRoles');
//-----------------------SANTOS TERMINO----------------------------------
//Auth::routes();



/*---------------------------------------------------------------------------------------- 
---------------------------------( RUTAS DOCENTE PRACTICAS ESCOLARES )--------------------
----------------------------------------------------------------------------------------*/   


/*---------------------------------------------RUTAS EMPRESAS----------------------------------------------------------*/

Route::get('/VisitasEscolares/Empresas/Lista', 'VisitaController@mostrarEmpresas')  //metodo Empresas-index()
    ->name('docente.mostrarEmpresas');

Route::get('VisitasEscolares/Empresas/Registrar', 'VisitaController@registrarEmpresa') //metodo Empresas-create()
    ->name('docente.registrarEmpresa');   

Route::post('VisitasEscolares/Empresas/Guardar', 'VisitaController@guardarEmpresa')    //Método Empresas-store()
    ->name('docente.guardarEmpresa');   


  /*---------------------------------------------RUTAS SOLICITUDES---------------------------------------------------------*/

Route::get('/VisitasEscolares', 'VisitaController@index')     //Método Visitas-index()
    ->name('docente.index');

Route::get('/VisitasEscolares/Solicitudes/{empresa}', 'VisitaController@registrarSolicitud') //Método Visitas-create()
    ->name('docente.registrarSolicitud');

Route::post('/VisitasEscolares/Solicitudes/Guardar', 'VisitaController@guardarSolicitud') //Método Visitas-store()
    ->name('docente.guardarSolicitud');

Route::get('/VisitasEscolares/Solicitudes/Ver/{visita}','VisitaController@verSolicitud')    //Método Visitas-show()
    ->name('docente.verSolicitud');

    
/*---------------------------------------------RUTAS VISITAS---------------------------------------------------------*/

Route::get('/VisitasEscolares/Visitas/Lista','VisitaController@mostrarVisitas')
    ->name('docente.mostrarVisitas');

Route::get('/VisitasEscolares/VisitaDocumentos/{visita}','VisitaController@registrarVisitaDocumento') //Método VisitaDocumento-index() && create()
->name('docente.registrarVisitaDocumento');

Route::post('/VisitasEscolares/VisitaDocumentos/Guardar', 'VisitaController@guardarVisitaDocumento') //Método VisitaDocumento-store()
    ->name('docente.guardarVisitaDocumento');

Route::get('/VisitasEscolares/VisitaDocumentos/Editar/{visitaDocumento}', 'VisitaController@editarVisitaDocumento') //Método VisitaDocumento-edit()
    ->name('docente.editarVisitaDocumento');   

Route::put('/VisitasEscolares/VisitaDocumentos/Actualizar/{visitaDocumento}', 'VisitaController@actualizarVisitaDocumento') //Método VisitaDocumento-update()
    ->name('docente.actualizarVisitaDocumento');  


 /*---------------------------------------------RUTAS GRUPOS----------------------------------------------------------*/
   
Route::get('/VisitasEscolares/GrupoVisita/Lista/{visita}', 'VisitaController@mostrarGrupos') //Método GrupoVisita-Index()
    ->name('docente.mostrarGrupos');

Route::get('/VisitasEscolres/GrupoVisita/{grupo}/{visita}', 'VisitaController@crearGrupoVisita') //Método GrupoVisita-Create()
    ->name('docente.crearGrupoVisita');

Route::post('VisitasEscolares/GrupoVisita/Guardar', 'VisitaController@guardarGrupoVisita')    //Método GrupoVisita-store()
    ->name('docente.guardarGrupoVisita');   

Route::delete('VisitasEscolares/GrupoVisita/Eliminar/{grupoVisita}', 'VisitaController@eliminarGrupoVisita') //Método GrupoVisita-Destroy()
    ->name('docente.eliminarGrupoVisita');


Route::get('/VisitasEscolares/Pagina/Inicio', 'VisitaController@inicio')
    ->name('docente.inicio'); 

Route::get('/VisitasEscolares/Pagina/DatosDocente', 'VisitaController@mostrarDatosDocente')
    ->name('docente.mostrarDatosDocente');


/*---------------------------------------------RUTAS FORMATOS----------------------------------------------------------*/


Route::get('/VisitasEscolaresAdmin/Formato/Lista', 'VisitaController@mostrarFormatos')
    ->name('adminVisitas.mostrarFormatos');

Route::get('/VisitasEscolaresAdmin/Formato/Registrar', 'VisitaController@registrarFormato')
    ->name('adminVisitas.registrarFormato');   

Route::post('/VisitasEscolaresAdmin/Formato/Guardar', 'VisitaController@guardarFormato') //método Formato-store()
    ->name('adminVisitas.guardarFormato');   

Route::get('/VisitasEscolaresAdmin/Formato/Editar/{visitaFormato}', 'VisitaController@editarFormato')
    ->name('adminVisitas.editarFormato');

Route::put('/VisitasEscolaresAdmin/Formato/Actualizar/{visitaFormato}', 'VisitaController@actualizarFormato')
    ->name('adminVisitas.actualizarFormato');