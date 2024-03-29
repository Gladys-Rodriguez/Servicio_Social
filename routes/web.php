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
Route::middleware(['auth', 'alumno'])->group(function () {
//Alumno
Route::get('NuevoRegistro',[App\Http\Controllers\ServiciosController::class, 'index'])->name('NuevoRegistro.index');

Route::post('NuevoRegistro', [App\Http\Controllers\ServiciosController::class, 'store'])->name('NuevoRegistro.store');

Route::get('/Index_Alumno', function (){
    return view('Pantallas_Alumno_Servicio.Index_Alumno');
}) -> name('Index_Alumno');

Route::get('/Inicio_Alumno', function (){
    return view('Pantallas_Alumno_Servicio.Index_AlumnoV2');
}) -> name('Inicio_Alumno');

Route::get('/DatosPersonales', function (){
    return view('Pantallas_Alumno_Servicio.DatosPersonales');
}) -> name('DatosPersonales');

Route::get('/Subida_Reportes', function (){
    return view('Pantallas_Alumno_Servicio.Expediente_Reportes');
}) -> name('Subida_Reportes');

Route::post('/uploadreporte', [App\Http\Controllers\DocsReportesController::class, 'store'])->name('uploadreporte.store');

Route::post('/uploadLiberacion', [App\Http\Controllers\DocsLiberacionesController::class, 'store'])->name('uploadLiberacion.store');

Route::get('/SeguimientoReportes', [App\Http\Controllers\DocsReportesController::class, 'index'])->name('SeguimientoReportes.index');

Route::get('/Inicio Alumno', [App\Http\Controllers\FormatosController::class, 'index_Alumno'])->name('Inicio Alumno');

Route::delete('/eliminarDocsAlumno/{id}', [App\Http\Controllers\docsExpediente::class, 'destroy'])->name('eliminarDocsAlumno.destroy');

Route::delete('/eliminarDocLiberacion/{id}', [App\Http\Controllers\DocsLiberacionesController::class, 'destroy'])->name('eliminarDocLiberacion.destroy');
});

Route::middleware(['auth', 'serviciosocial'])->group(function () {

//Admin

Route::get('/DatosServicio', function (){
    return view('Pantallas_Admin_Servicio.DatosServicio');
}) -> name('DatosServicio');

Route::get('/ListaDeAlumnos', function (){
    return view('Pantallas_Admin_Servicio.ListaAlumnos');
}) -> name('ListaDeAlummos');

Route::get('/ListaDeAlumnosInhabilitados', function (){
    return view('Pantallas_Admin_Servicio.ListaAlumnosInhabilitados');
}) -> name('ListaDeAlummosInhabilitados');

Route::get('/EditarEstadoAlumno', function (){
    return view('Pantallas_Admin_Servicio.EditarEstadoAlumno');
}) -> name('EditarEstadoAlumno');

Route::get('/EditarEstadoAlumno/{id}', [App\Http\Controllers\EditarEstadoAlumnoController::class, 'edit'])->name('home');
Route::put('/EditarEstadoAlumno2/{id}', [App\Http\Controllers\EditarEstadoAlumnoController::class, 'update'])->name('EditarEstadoAlumno.update');

Route::get('/Registro de Fechas', function (){
    return view('Pantallas_Admin_Servicio.RegistroFechas');
}) -> name('Registro de Fechas');

Route::get('/Expediente', function (){
    return view('Pantallas_Admin_Servicio.expediente');
}) -> name('Expediente');

Route::get('/ListaDeAlumnosInhabilitados', [App\Http\Controllers\ListadoAlumnosInhabilitadosController::class, 'index'])->name('ListaDeAlumnosInhabilitados.index');
Route::get('/DatosServicioInhabilitados/{id}', [App\Http\Controllers\RegistroServicioInhabilitadosController::class, 'index'])->name('DatosServicioInhabilitados.index');

Route::get('/ListaDeAlumnos', [App\Http\Controllers\ListadoAlumnosController::class, 'index'])->name('ListaDeAlumnos.index');
Route::get('/DatosServicio/{id}', [App\Http\Controllers\RegistroServicioController::class, 'index'])->name('DatosServicio.index');


Route::get('/Registro de Fechas/{id}', [App\Http\Controllers\FechasServicioController::class, 'index'])->name('Registro de Fechas.index');
Route::put('/Registro de Fechas/{id}', [App\Http\Controllers\FechasServicioController::class, 'update'])->name('Registro de Fechas.update');

Route::get('/Expediente/{id}', [App\Http\Controllers\FechasServicioController::class, 'docs'])->name('Expediente.docs');
Route::put('/Expediente/{id}', [App\Http\Controllers\FechasServicioController::class, 'update_registro'])->name('Expediente.update_registro');
Route::put('/ExpedienteLiberacion/{id}', [App\Http\Controllers\FechasServicioController::class, 'update_liberacion'])->name('ExpedienteLiberacion.update_liberacion');

Route::get('/Subida_Formatos', function (){
    return view('Pantallas_Admin_Servicio.formatos');
}) -> name('Subida_Formatos');

Route::post('/UploadFormato', [App\Http\Controllers\FormatosController::class, 'store'])->name('UploadFormato.store');

Route::post('/UploadTuto', [App\Http\Controllers\TutotialController::class, 'store'])->name('UploadTuto.store');

Route::get('/SubirFormatos', [App\Http\Controllers\FormatosController::class, 'index'])->name('SubirFormatos.index');

Route::get('/Expediente_Reportes/{id}', [App\Http\Controllers\DocsReportesController::class, 'docs'])->name('Expediente_Reportes.docs');

Route::get('/EditarReportes/{id}', [App\Http\Controllers\DocsReportesController::class, 'edit'])->name('EditarReportes.edit');
Route::get('/EditarDocsLiberación/{id}', [App\Http\Controllers\DocsLiberacionesController::class, 'edit'])->name('EditarDocsLiberación.edit');

Route::post('/UpdateReportes/{id}', [App\Http\Controllers\DocsReportesController::class, 'update'])->name('UpdateReportes.update');
Route::post('/UpdateDocsLiberacion/{id}', [App\Http\Controllers\DocsLiberacionesController::class, 'update'])->name('UpdateDocsLiberacion.update');
Route::put('/updateTuto', [App\Http\Controllers\TutotialController::class, 'update'])->name('updateTuto.update');

Route::delete('/eliminarFormato/{id}', [App\Http\Controllers\FormatosController::class, 'destroy'])->name('eliminarFormato.destroy');
});

Route::middleware(['auth', 'adminmaster'])->group(function () {

//ADMIN MASTER

Route::get('/RegisterFormRoles', [App\Http\Controllers\registroRol::class, 'index'])->name('RegisterFormRoles.index');
});

// ************************************* FIN   RUTAS    DE    GLADYS    *******************************************

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/files', [App\Http\Controllers\FilesController::class, 'index'])->name('index');
Route::post('/upload', [App\Http\Controllers\FilesController::class, 'store'])->name('user.files.store');

Route::middleware(['auth', 'serviciosocial'])->group(function () {
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
});

Route::middleware(['auth', 'alumno'])->group(function () {
// Ruta Alumno subida de archivos
Route::get('/docexpediente', function () {
    return view('Pantallas_Alumno_Servicio.Alumno_expediente');
}) -> name('docexpediente');

});

// Subir Archivos alumnos store
Route::post('/uploaddocexpediente', [App\Http\Controllers\docsExpediente::class, 'store'])->name('uploaddocexpediente.store');

//Ruta para ver la solicitud del alumno
Route::get('/docsSolicitudAlumno', [App\Http\Controllers\docsExpediente::class, 'index'])->name('uploaddocexpediente.index');

//Ruta para ver los documentos del alumno
Route::get('/docsSolicitudAlumno/{file}', [App\Http\Controllers\docsExpediente::class, 'show'])->name('uploaddocexpediente.show');

//Ruta eliminar
Route::delete('/eliminarReportesAlumno/{id}', [App\Http\Controllers\DocsReportesController::class, 'destroy'])->name('uploadReporte.destoy');

//Ruta para ver el listado de alumnos
Route::get('/concentradosInfo', [App\Http\Controllers\AlumnoController::class, 'lista'])->name('alumno.lista');

//Ruta para ver Buscar los alumnos
Route::get('/buscarAlumnos', [App\Http\Controllers\AlumnoController::class, 'buscar'])->name('alumno.buscar');

//Ruta para validar documentos por parte del admin
Route::get('/docsvalidardocalumno', [App\Http\Controllers\docsExpediente::class, 'lista'])->name('lista.edit');

//Ruta editar documentos del usuario
Route::get('/docseditardocalumno/{id}', [App\Http\Controllers\docsExpediente::class, 'edit'])->name('uploaddocexpediente.edit');

//Ruta update documentos del usuario alumno
Route::post('/docsupdatedocalumno/{id}', [App\Http\Controllers\docsExpediente::class, 'update'])->name('uploaddocexpediente.update');

Route::get('/storagelink', function() {
    Artisan::call('storage:link');
    return 'Done';
});

//Ruta validación Documentos Alumno
//Route::get('/validacionAlumno', function () {
  //  return view('Pantallas_Admin_Servicio.validacionAlumno');
// }) -> name('validacionAlumno');

//Ruta validacion Reportes
// Route::get('/validacionReportes', function () {
   // return view('Pantallas_Admin_Servicio.validacionReportes');
//}) -> name('validacionReportes');


//------------------------FER INICIO------------------------------------

Route::middleware(['auth', 'becas'])->group(function () {
//Ruta Admin Becas Index3
Route::get('/Admin_Becas_Index3', function () {
    return view('Pantallas_Admin_Becas.Admin_Becas_Index3');
}) -> name('Admin_Becas_Index3');

Route::get('/SB/{id}', [App\Http\Controllers\SolicitudesBecasController::class, 'edit'])->name('home');
Route::put('/SB1/{id}', [App\Http\Controllers\SolicitudesBecasController::class, 'update'])->name('SB1.update');

Route::get('/Tipo_Alumno_Becas','SolicitudesBecasController@index');
Route::get('/AceptadasV','PracticasAceptadasController@index');
Route::get('/RechazadasV','PracticasRechazadasController@index');
Route::get('/AceptadasB','AceptadasBController@index');
Route::get('/RechazadasB','RechazadasBController@index');

Route::get('/VB2/{id}', [App\Http\Controllers\ValidacionBController::class, 'edit'])->name('home');
Route::put('/VB3/{id}', [App\Http\Controllers\ValidacionBController::class, 'update'])->name('VB3.update');
});

Route::middleware(['auth', 'practicas'])->group(function () {
//Ruta Admin Practicas y Visitas Index
Route::get('/Admin_Practicas_Visitas_Index2', function () {
    return view('Pantallas_Admin_Practicas_Visitas.Admin_Practicas_Visitas_Index2');
}) -> name('Admin_Practicas_Visitas_Index2');


//Ruta Validacion Practicas y Visitas
Route::get('/Validacion_Practicas_Visitas','ValidacionDocPraController@index');
Route::get('/Validacion_Alumno_Becas','ValidacionBController@index');

//Ruta Clasificacion Practicas y Visitas
Route::get('/Solicitudes_Practicas_Visitas','AdminPracSolicitudesController@index');

Route::get('/SolicitudesPra/{id}', [App\Http\Controllers\AdminPracSolicitudesController::class, 'edit'])->name('home');
Route::put('/SolicitudesPra1/{id}', [App\Http\Controllers\AdminPracSolicitudesController::class, 'update'])->name('SolicitudesPra1.update');

Route::get('/ValidacionV2/{id}', [App\Http\Controllers\ValidacionDocPraController::class, 'edit'])->name('home');
Route::put('/Validacion3/{id}', [App\Http\Controllers\ValidacionDocPraController::class, 'update'])->name('Validacion3.update');

Route::get('/AdminPracticas/SolicitudesRechazadas', 'AdminPracSolicitudesController@solicitudesRechazadasIndex')
    ->name('AdminPracticas.solicitudesRechazadasIndex');

Route::get('/AdminPracticas/SolicitudesCorregidas', 'AdminPracSolicitudesController@solicitudesCorregidasIndex')
    ->name('AdminPracticas.solicitudesCorregidasIndex');

Route::get('/AdminPracticas/SolicitudesAceptadas', 'AdminPracSolicitudesController@solicitudesAceptadasIndex')
    ->name('AdminPracticas.solicitudesAceptadasIndex');

Route::get('/AdminPracticas/SolicitudesFinalizadas', 'AdminPracSolicitudesController@solicitudesFinalizadasIndex')
    ->name('AdminPracticas.solicitudesFinalizadasIndex');

Route::get('/AdminPracticas/Solicitud/Editar/{visita}', 'AdminPracSolicitudesController@editarSolicitud') //Método SOLICITUD-EDIT()
    ->name('AdminPracticas.editarSolicitud');

Route::put('/AdminPracticas/Solicitud/Actualizar/{visita}', 'AdminPracSolicitudesController@actualizarSolicitud') //Método SOLICITUD-UPDATE()
    ->name('AdminPracticas.actualizarSolicitud');

//------------------------RUTAS DOCENTE -----------------------------------


Route::get('/AdminPracticas/Docente/Registrar','AdminPracSolicitudesController@registrarDocente') //Método DOCENTE-CREATE()
    ->name('AdminPracticas.registrarDocente');

Route::post('AdminPracticas/Docente/Guardar', 'AdminPracSolicitudesController@guardarDocente')    //Método DOCENTE-STORE()
    ->name('AdminPracticas.guardarDocente');

Route::get('/AdminPracticas/Docente', 'AdminPracSolicitudesController@indexDocente') //Método DOCENTE-INDEX()
    ->name('AdminPracticas.indexDocente');

Route::get('/AdminPracticas/Docente/Editar/{docente}', 'AdminPracSolicitudesController@editarDocente') //Método DOCENTE-EDIT()
    ->name('AdminPracticas.editarDocente');

Route::put('/AdminPracticas/Docente/Actualizar/{docente}', 'AdminPracSolicitudesController@actualizarDocente') //Método DOCENTE-UPDATE()
    ->name('AdminPracticas.actualizarDocente');

//------------------------RUTAS TIPO_DOCUMENTO-----------------------------------

Route::get('/AdminPracticas/TipoDocumento', 'AdminPracSolicitudesController@indexTipoDocumento') //Método TIPO_DOCUMENTO-INDEX()
    ->name('AdminPracticas.indexTipoDocumento');

Route::get('/AdminPracticas/TipoDocumento/Registrar','AdminPracSolicitudesController@registrarTipoDocumento') //Método TIPO_DOCUMENTO-CREATE()
    ->name('AdminPracticas.registrarTipoDocumento');

Route::post('AdminPracticas/TipoDocumento/Guardar', 'AdminPracSolicitudesController@guardarTipoDocumento')    //Método TIPO_DOCUMENTO-STORE()
    ->name('AdminPracticas.guardarTipoDocumento');

Route::get('/AdminPracticas/TipoDocumento/Editar/{tipo_documento}', 'AdminPracSolicitudesController@editarTipoDocumento') //Método SOLICITUD-EDIT()
    ->name('AdminPracticas.editarTipoDocumento');

Route::put('/AdminPracticas/TipoDocumento/Actualizar/{tipo_documento}', 'AdminPracSolicitudesController@actualizarTipoDocumento') //Método SOLICITUD-UPDATE()
    ->name('AdminPracticas.actualizarTipoDocumento');


//------------------------RUTAS VISITA_DOCUMENTO-----------------------------------

Route::get('/AdminPracticas/DocumentosSolicitud/Editar/{visita_documento}', 'AdminPracSolicitudesController@editarDocumentosSolicitud') //Método Documento_Visita-EDIT()
    ->name('AdminPracticas.editarDocumentosSolicitud');

Route::put('/AdminPracticas/DocumentosSolicitud/Actualizar/{visita_documento}', 'AdminPracSolicitudesController@actualizarDocumentosSolicitud') //Método Documento_Visita-UPDATE()
    ->name('AdminPracticas.actualizarDocumentosSolicitud');


//------------------------RUTAS FORMATOS-----------------------------------

Route::get('/AdminPracticas/Formato/Registrar','AdminPracSolicitudesController@registrarFormato') //Método FORMATO-CREATE()
    ->name('AdminPracticas.registrarFormato');

Route::post('AdminPracticas/Formato/Guardar', 'AdminPracSolicitudesController@guardarFormato')    //Método FORMATO-STORE()
    ->name('AdminPracticas.guardarFormato');

Route::get('/AdminPracticas/Formato/Editar/{visita_formato}', 'AdminPracSolicitudesController@editarFormato') //Método FORMATO-EDIT()
    ->name('AdminPracticas.editarFormato');

Route::put('/AdminPracticas/Formato/Actualizar/{visita_formato}', 'AdminPracSolicitudesController@actualizarFormato') //Método FORMATO-UPDATE()
    ->name('AdminPracticas.actualizarFormato');

Route::get('/AdminPracticas/FormatosPlantilla','AdminPracSolicitudesController@indexFormatosEjemplo') //Método FORMATO-INDEX()
    ->name('AdminPracticas.indexFormatosEjemplo');

Route::get('/AdminPracticas/FormatosEjemplo','AdminPracSolicitudesController@indexFormatosPlantilla') //Método FORMATO-INDEX()
    ->name('AdminPracticas.indexFormatosPlantilla');

Route::get('/AdminPracticas/FormatosCalendarioVisitas','AdminPracSolicitudesController@indexFormatosCalendarioVisitas') //Método FORMATO-INDEX()
    ->name('AdminPracticas.indexFormatosCalendarioVisitas');

//------------------------RUTAS CARRERA-----------------------------------

Route::get('/AdminPracticas/Carrera/Registrar','AdminPracSolicitudesController@registrarCarrera') //Método CARRERA-CREATE()
    ->name('AdminPracticas.registrarCarrera');

Route::post('AdminPracticas/Carrera/Guardar', 'AdminPracSolicitudesController@guardarCarrera')    //Método CARRERA-STORE()
    ->name('AdminPracticas.guardarCarrera');

Route::get('/AdminPracticas/Carrera/Editar/{carrera}', 'AdminPracSolicitudesController@editarCarrera') //Método CARRERA-EDIT()
    ->name('AdminPracticas.editarCarrera');

Route::put('/AdminPracticas/Carrera/Actualizar/{carrera}', 'AdminPracSolicitudesController@actualizarCarrera') //Método CARRERA-UPDATE()
    ->name('AdminPracticas.actualizarCarrera');

Route::get('/AdminPracticas/Carrera','AdminPracSolicitudesController@indexCarrera') //Método CARRERA-INDEX()
    ->name('AdminPracticas.indexCarrera');


//------------------------RUTAS CARRERA-----------------------------------

Route::get('/AdminPracticas/Grupo/Registrar','AdminPracSolicitudesController@registrarGrupo') //Método GRUPO-CREATE()
    ->name('AdminPracticas.registrarGrupo');

Route::post('AdminPracticas/Grupo/Guardar', 'AdminPracSolicitudesController@guardarGrupo')    //Método GRUPO-STORE()
    ->name('AdminPracticas.guardarGrupo');

Route::get('/AdminPracticas/Grupo/Editar/{grupo}', 'AdminPracSolicitudesController@editarGrupo') //Método GRUPO-EDIT()
    ->name('AdminPracticas.editarGrupo');

Route::put('/AdminPracticas/Grupo/Actualizar/{grupo}', 'AdminPracSolicitudesController@actualizarGrupo') //Método GRUPO-UPDATE()
    ->name('AdminPracticas.actualizarGrupo');

Route::get('/AdminPracticas/Grupo','AdminPracSolicitudesController@indexGrupo') //Método GRUPO-INDEX()
    ->name('AdminPracticas.indexGrupo');
});

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

//Ruta oara pantalla de registro exitoso de registro de servicio
Route::get('/Registro_exitosoServicio', function (){
    return view('Pantallas_Principales.Registro_exitosoServicio');
}) -> name('Registro_exitosoServicio');

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


Route::get('/prueba', function (){
    return view('Pantallas_Principales.prueba');
}) -> name('prueba');


//administrador master

//Ruta oara pantalla de registro exitoso de imagenes de banner de home
Route::middleware(['auth', 'adminmaster'])->group(function () {
Route::get('/Registro_exitosoBannersHome', function (){
    return view('Pantallas_Principales.Registro_exitosoBannersHome');
}) -> name('Registro_exitoso');

//Ruta oara pantalla de registro exitoso de roles
Route::get('/Registro_exitosoRoles', function (){
    return view('Pantallas_Principales.Registro_exitosoRoles');
}) -> name('Registro_exitosoRoles');

//Ruta para el registro de imagenes del home
Route::get('/RegisterBannerInicio', function (){
    return view('Pantallas_Principales.RegisterBannerInicio');
}) -> name('RegisterBannerInicio');

//Ruta para recibir los datos que enviamos para el registro de imagenes de servicio
Route::resource('Inicio','registro');
Route::post('/registrosImagenesI/(id)', [App\Http\Controllers\RegistroBannerInicio::class, 'store'])->name('registrosImagenesI.store'); //aqui se edita la pantalla de alcance

//Vista para consulta de alumnos para el super administrador
Route::get('/consultaAlumnoM', [App\Http\Controllers\consultaAlumnoMController::class, 'index'])->name('home');

//Vista para consulta de imagenes de banner de inicio
Route::get('/consultaBannerInicio', [App\Http\Controllers\consultaBannerInicioController::class, 'index'])->name('home');

//Vista para consulta de imagenes de banner de inicio inhabilitadas
Route::get('/consultaBannerInicioInhabilitadas', [App\Http\Controllers\consultaBannerInicioInhabilitadasController::class, 'index'])->name('home');


//Pantalla de editar de imagenes de inicio
Route::get('/EditarFormBannerInicio', function (){
    return view('Pantallas_Principales.EditarFormBannerInicio');
}) -> name('EditarFormBannerInicio');

Route::get('/EditarFormBannerInicio/{id}', [App\Http\Controllers\editarBannerInicioController::class, 'edit'])->name('home');
Route::put('/EditarFormBannerInicio2/{id}', [App\Http\Controllers\editarBannerInicioController::class, 'update'])->name('EditarFormBannerServicio2.update');
Route::delete('/EditarFormBannerInicio3/{id}', [App\Http\Controllers\editarBannerInicioController::class, 'destroy'])->name('pruebaEditarForm3.update');


});

//administrador de servicio social

Route::middleware(['auth', 'serviciosocial'])->group(function () {
    //Ruta oara pantalla de registro exitoso de imagenes de banner de servicio
Route::get('/Registro_exitosoBannersServicio', function (){
    return view('Pantallas_Principales.Registro_exitosoBannersServicio');
}) -> name('Registro_exitoso');

//Ruta para recibir los datos que enviamos para el registro de imagenes de servicio
Route::resource('Servicio','registro');
Route::post('/registrosImagenesS/(id)', [App\Http\Controllers\RegistroBannerServicio::class, 'store'])->name('registrosImagenesS.store'); //aqui se edita la pantalla de alcance

//Ruta para el registro de imagenes de servicio
    Route::get('/RegisterBannerServicio', function (){
        return view('Pantallas_Principales.RegisterBannerServicio');
    }) -> name('RegisterBannerServicio');

    //Vista para consulta de imagenes de banner de servicio
Route::get('/consultaBannerServicio', [App\Http\Controllers\consultaBannerServicioController::class, 'index'])->name('home');

//Vista para consulta de imagenes inhabilitadas de banner de servicio
Route::get('/consultaBannerServicioInhabilitadas', [App\Http\Controllers\consultaBannerServicioInhabilitadasController::class, 'index'])->name('home');

//Pantalla de editar de imagenes de servicio
Route::get('/EditarFormBannerServicio', function (){
    return view('Pantallas_Principales.EditarFormBannerServicio');
}) -> name('EditarFormBannerServicio');

Route::get('/EditarFormBannerServicio/{id}', [App\Http\Controllers\editarBannerServicioController::class, 'edit'])->name('home');
Route::put('/EditarFormBannerServicio2/{id}', [App\Http\Controllers\editarBannerServicioController::class, 'update'])->name('EditarFormBannerServicio2.update');
Route::delete('/EditarFormBannerServicio3/{id}', [App\Http\Controllers\editarBannerServicioController::class, 'destroy'])->name('pruebaEditarForm3.update');


});

//administrador de practicas

Route::middleware(['auth', 'practicas'])->group(function () {
    //Ruta para pantalla de registro exitoso de imagenes de banner de practicas
Route::get('/Registro_exitosoBannersPracticas', function (){
    return view('Pantallas_Principales.Registro_exitosoBannersPracticas');
}) -> name('Registro_exitoso');


//Ruta para el registro de imagenes de practicas
Route::get('/RegisterBannerPracticas', function (){
    return view('Pantallas_Principales.RegisterBannerPracticas');
}) -> name('RegisterBannerPracticas');

//Ruta para recibir los datos que enviamos para el registro de imagenes de becas
Route::resource('Practicas','registro');
Route::post('/registrosImagenesP/(id)', [App\Http\Controllers\RegistroBannerPracticas::class, 'store'])->name('registrosImagenesP.store'); //aqui se edita la pantalla de alcance

//Vista para consulta de imagenes de banner de practicas
Route::get('/consultaBannerPracticas', [App\Http\Controllers\consultaBannerPracticasController::class, 'index'])->name('home');

//Vista para consulta de imagenes inhabilitadas de banner de practicas
Route::get('/consultaBannerPracticasInhabilitadas', [App\Http\Controllers\consultaBannerPracticasInhabilitadasController::class, 'index'])->name('home');

//Pantalla de editar de imagenes de practicas
Route::get('/EditarFormBannerPracticas', function (){
    return view('Pantallas_Principales.EditarFormBannerPracticas');
}) -> name('EditarFormBannerPracticas');

Route::get('/EditarFormBannerPracticas/{id}', [App\Http\Controllers\editarBannerPracticasController::class, 'edit'])->name('home');
Route::put('/EditarFormBannerPracticas2/{id}', [App\Http\Controllers\editarBannerPracticasController::class, 'update'])->name('EditarFormBannerPracticas2.update');
Route::delete('/EditarFormBannerPracticas3/{id}', [App\Http\Controllers\editarBannerPracticasController::class, 'destroy'])->name('pruebaEditarForm3.update');


});

//administrador de becas

Route::middleware(['auth', 'becas'])->group(function () {
//Ruta oara pantalla de registro exitoso de imagenes de banner de becas
Route::get('/Registro_exitosoBannersBecas', function (){
    return view('Pantallas_Principales.Registro_exitosoBannersBecas');
}) -> name('Registro_exitoso');


//Ruta para el registro de imagenes de becas
Route::get('/RegisterBannerBecas', function (){
    return view('Pantallas_Principales.RegisterBannerBecas');
}) -> name('RegisterBannerServicio');

//Ruta para recibir los datos que enviamos para el registro de imagenes de becas
Route::resource('Becas','registro');
Route::post('/registrosImagenesB/(id)', [App\Http\Controllers\RegistroBannerBecas::class, 'store'])->name('registrosImagenesB.store'); //aqui se edita la pantalla de alcance

//Vista para consulta de imagenes de banner de becas
Route::get('/consultaBannerBecas', [App\Http\Controllers\consultaBannerBecasController::class, 'index'])->name('home');

//Vista para consulta de imagenes inhabilitadas de banner de becas
Route::get('/consultaBannerBecasInhabilitadas', [App\Http\Controllers\consultaBannerBecasInhabilitadasController::class, 'index'])->name('home');

//Pantalla de editar de imagenes de becas
Route::get('/EditarFormBannerBecas', function (){
    return view('Pantallas_Principales.EditarFormBannerBecas');
}) -> name('EditarFormBannerBecas');

Route::get('/EditarFormBannerBecas/{id}', [App\Http\Controllers\editarBannerBecasController::class, 'edit'])->name('home');
Route::put('/EditarFormBannerBecas2/{id}', [App\Http\Controllers\editarBannerBecasController::class, 'update'])->name('EditarFormBannerServicio2.update');
Route::delete('/EditarFormBannerBecas3/{id}', [App\Http\Controllers\editarBannerBecasController::class, 'destroy'])->name('pruebaEditarForm3.update');


});

// alumno

Route::middleware(['auth', 'alumno'])->group(function () {
//editar datos de alumno
Route::get('/EditarAlumnoForm/{id}', [App\Http\Controllers\editarAlumnoController::class, 'edit'])->name('home');
Route::put('/EditarAlumnoForm2/{id}', [App\Http\Controllers\editarAlumnoController::class, 'update'])->name('EditarAlumnoController.update');

//Route::get('/datosPersonalesA', [App\Http\Controllers\registro::class, 'index'])->name('datosPersonalesA.index');
Route::get('/DatosPersonales', [App\Http\Controllers\registro::class, 'index'])->name('DatosPersonales.index');


});



//------------------------IVAN TERMINO------------------------------------

//-----------------------------------SANTOS INICIO-----------------------------------
Route::middleware(['auth', 'alumno'])->group(function () {
Route::get('/ConvocatoriaBecas', function (){
    return view('Pantallas_Alumno_Becas.ConvocatoriaBecas');
}) -> name('ConvocatoriaBecas');

Route::get('/FormatosBeca', function (){
    return view('Pantallas_Alumno_Becas.FormatosBeca');
}) -> name('FormatosBeca');

Route::get('/MiBeca','MiBecaDatosController@index');

Route::post('/registroBecaB/(id)', [App\Http\Controllers\solicitarBeca::class, 'store'])->name('registroBecaB.store');

Route::get('/RegistrarDoc','RegistrarDocController@index');

Route::get('/EditarDoc/{id}', [App\Http\Controllers\MiBecaDatosController::class, 'edit'])->name('home');

Route::delete('/BorraDocB/{id}', [App\Http\Controllers\MiBecaDatosController::class, 'destroy'])->name('pruebaEditarForm3.update');
Route::put('/EditarDoc1/{id}', [App\Http\Controllers\MiBecaDatosController::class, 'update'])->name('EditarMiBecaController.update');

Route::post('/RegistrarDoc/Documentos/Guardar', 'RegistrarDocController@guardarDoc') //Método Visitas-store()
    ->name('documento.guardarDoc');

});

Route::middleware(['auth', 'adminmaster'])->group(function () {
    Route::get('/Index_Master','AdminMasterIndexController@index');

    Route::get('/ConsultaAdminSer','ConsultaAdminSerController@index');
    Route::delete('/BorraUserSer/{id}', [App\Http\Controllers\ConsultaAdminSerController::class, 'destroy'])->name('pruebaEditarForm3.update');

    Route::get('/ConsultaAdminPra','ConsultaAdminPraController@index');
    Route::get('/EditarAdminPra/{id}', [App\Http\Controllers\ConsultaAdminPraController::class, 'edit'])->name('home');
    Route::put('/EditarAdminPra1/{id}', [App\Http\Controllers\ConsultaAdminPraController::class, 'update'])->name('EditarAdminPraController.update');
    Route::delete('/BorraUserPra/{id}', [App\Http\Controllers\ConsultaAdminPraController::class, 'destroy'])->name('pruebaEditarForm3.update');

    Route::get('/ConsultaAdminBe','ConsultaAdminBeController@index');
    Route::delete('/BorraUserBe/{id}', [App\Http\Controllers\ConsultaAdminBeController::class, 'destroy'])->name('pruebaEditarForm3.update');

    //Pantalla Registro con roles
Route::get('/RegisterFormRoles', function (){
    return view('Pantallas_Admin_Master.RegisterFormRoles');
}) -> name('RegisterFormRoles');

//editar estado del alumno
Route::get('/EditarAdminForm/{id}', [App\Http\Controllers\AdminMasterIndexController::class, 'edit'])->name('home');
Route::put('/EditarAdminForm2/{id}', [App\Http\Controllers\AdminMasterIndexController::class, 'update'])->name('EditarAlumnoController.update');


});

//-----------------------SANTOS TERMINO----------------------------------
//Auth::routes();



/*----------------------------------------------------------------------------------------
---------------------------------( RUTAS DOCENTE PRACTICAS ESCOLARES )--------------------
----------------------------------------------------------------------------------------*/

Route::middleware(['auth', 'docente'])->group(function () {
/*---------------------------------------------RUTAS EMPRESAS----------------------------------------------------------*/

Route::get('/VisitasEscolares/Empresas/Lista', 'VisitaController@mostrarEmpresas')  //metodo Empresas-index()
    ->name('docente.mostrarEmpresas');

Route::get('VisitasEscolares/Empresas/Registrar', 'VisitaController@registrarEmpresa') //metodo Empresas-create()
    ->name('docente.registrarEmpresa');

Route::post('VisitasEscolares/Empresas/Guardar', 'VisitaController@guardarEmpresa')    //Método Empresas-store()
    ->name('docente.guardarEmpresa');

Route::get('/VisitasEscolares/Empresas/Editar/{empresa}', 'VisitaController@editarEmpresa') //Método Empresas-EDIT()
    ->name('docente.editarEmpresa');

Route::put('/VisitasEscolares/Empresas/Actualizar/{empresa}', 'VisitaController@actualizarEmpresa') //Método Empresas-UPDATE()
    ->name('docente.actualizarEmpresa');


  /*---------------------------------------------RUTAS SOLICITUDES---------------------------------------------------------*/

Route::get('/VisitasEscolares', 'VisitaController@index')     //Método Visitas-index()
    ->name('docente.index');

Route::get('/VisitasEscolares/Solicitudes/{empresa}', 'VisitaController@registrarSolicitud') //Método Visitas-create()
    ->name('docente.registrarSolicitud');

Route::post('/VisitasEscolares/Solicitudes/Guardar', 'VisitaController@guardarSolicitud') //Método Visitas-store()
    ->name('docente.guardarSolicitud');

Route::get('/VisitasEscolares/Solicitudes/Ver/{visita}','VisitaController@verSolicitud')    //Método Visitas-show()
    ->name('docente.verSolicitud');

Route::get('/VisitasEscolares/Solicitudes/ModificarEstado/{visita}','VisitaController@modificarEstadoSolcitud')
    ->name('docente.ModificarEstado');

Route::get('/VisitasEscolares/Solicitudes/Editar/{visita}', 'VisitaController@editarSolicitud') //Método Solicitudes-EDIT()
    ->name('docente.editarSolicitudes');

Route::put('/VisitasEscolares/Solicitudes/Actualizar/{visita}', 'VisitaController@actualizarSolicitud') //Método Solicitudes-UPDATE()
    ->name('docente.actualizarSolicitudes');


/*---------------------------------------------RUTAS DOCUMENTOS---------------------------------------------------------*/

Route::get('/VisitasEscolares/DocumentosSolicitud/{visita}', 'VisitaController@indexDocumentosSolicitud') //Método Documento_Visita-Create()
    ->name('docente.indexDocumentosSolicitud');

Route::post('/VisitasEscolares/DocumentosSolicitud/Guardar', 'VisitaController@guardarDocumentosSolicitud') //Método Documento_Visita-store()
    ->name('docente.guardarDocumentosSolicitud');

Route::get('/VisitasEscolares/DocumentosSolicitud/Editar/{visita_documento}', 'VisitaController@editarDocumentosSolicitud') //Método Documento_Visita-EDIT()
    ->name('docente.editarDocumentosSolicitud');

Route::put('/VisitasEscolares/DocumentosSolicitud/Actualizar/{visita_documento}', 'VisitaController@actualizarDocumentosSolicitud') //Método Documento_Visita-UPDATE()
    ->name('docente.actualizarDocumentosSolicitud');

Route::get('/VisitasEscolares/DocumentosVisita/{visita}', 'VisitaController@indexDocumentosVisita') //Método Documento_Visita-Create()
    ->name('docente.indexDocumentosVisita');

/*---------------------------------------------RUTAS VISITAS---------------------------------------------------------*/



 /*---------------------------------------------RUTAS GRUPOS----------------------------------------------------------*/

Route::get('/VisitasEscolares/GrupoVisita/Lista/{visita}', 'VisitaController@mostrarGrupos') //Método GrupoVisita-Index()
    ->name('docente.mostrarGrupos');

Route::get('/VisitasEscolres/GrupoVisita/{grupo}/{visita}', 'VisitaController@crearGrupoVisita') //Método GrupoVisita-Create()
    ->name('docente.crearGrupoVisita');

Route::post('VisitasEscolares/GrupoVisita/Guardar', 'VisitaController@guardarGrupoVisita')    //Método GrupoVisita-store()
    ->name('docente.guardarGrupoVisita');

Route::delete('VisitasEscolares/GrupoVisita/Eliminar/{grupoVisita}', 'VisitaController@eliminarGrupoVisita') //Método GrupoVisita-Destroy()
    ->name('docente.eliminarGrupoVisita');


/*---------------------------------------------RUTAS OTROS----------------------------------------------------------*/

Route::get('/VisitasEscolares/Pagina/Inicio', 'VisitaController@inicio')
    ->name('docente.inicio');

Route::get('/VisitasEscolares/Pagina/DatosDocente', 'VisitaController@mostrarDatosDocente')
    ->name('docente.mostrarDatosDocente');

/*---------------------------------------------RUTAS FORMATOS----------------------------------------------------------*/
});

