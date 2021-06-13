
@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno2')

<!-- comentario -->
@section('title', 'Nuevo Registro')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


@endsection

@section('content')

<div class="container">

    <div class="progress-bar">
        <div class="step">
            <p>1</p>
                <div class="bullet">
                    <span></span>
                </div>
         <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>2</p>
                <div class="bullet">
                    <span></span>
                </div>
        <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>3</p>
                <div class="bullet">
                    <span></span>
                </div>
        <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>4</p>
                <div class="bullet">
                    <span></span>
                </div>
        <div class="check fas fa-check"></div>
        </div>
    </div>


    <!-- ************************** INICIO DEL FORMULARIO ********************************** -->
    <div class="form-outer">
        <div class="separa">
            <form action="{{route('NuevoRegistro.store')}}" method="POST" autocomplete="off" id="formulario" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                <!--     **************************   PRIMER STEP  **************************** -->

                <div class="page slide-page">

                    <div class="title">Dirección de la Dependencia:</div>
                    <br>
           <!-- Grupo: Ciudad -->
           <div class="formulario__grupo" id="grupo__ciudad">
            <div class="field">
                <div class="label" for="ciudad">Ciudad:</div>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="ciudad" id="ciudad" placeholder="Ingresa tu Ciudad">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <p class="formulario__input-error">Error, por favor ingresa una ciudad válida. </p>
        </div>

         <!-- Grupo: Alcaldia/Municipio -->
        <div class="formulario__grupo" id="grupo__alcaldia">
            <div class="field">
                <div class="label" for="alcaldia">Alcaldia/Municipio:</div>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="alcaldia" id="alcaldia" placeholder="Ingresa tu Alcaldia o Municipio">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>
            <p class="formulario__input-error">Error, por favor ingresa una alcaldia o municipio válido. </p>
        </div>
         <!-- Grupo: Colonia -->
         <div class="formulario__grupo" id="grupo__colonia">
            <div class="field">
                <div class="label" for="colonia">Colonia:</div>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="colonia" id="colonia" placeholder="Ingresa tu colonia">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>
            <p class="formulario__input-error">Error, por favor ingresa una colonia válida. </p>
        </div>

         <!-- Grupo: Calle -->
         <div class="formulario__grupo" id="grupo__calle">
            <div class="field">
                <div class="label" for="calle">Calle:</div>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="calle" id="calle" placeholder="Ingresa tu Calle">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>
            <p class="formulario__input-error">Error, por favor ingresa una calle valida. </p>
        </div>

         <!-- Grupo: Numero Ext. -->
         <div class="formulario__grupo" id="grupo__num_ext">
            <div class="field">
                <div class="label" for="ap_materno">Numero Ext.:</div>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="num_ext" id="num_ext" placeholder="Ingresa tu numero ext">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>
            <p class="formulario__input-error">Error, por favor ingresa un dato válido.</p>
        </div>

         <!-- Grupo: Numero Int -->
        <div class="formulario__grupo" id="grupo__num_int">
            <div class="field">
                <div class="label" for="num_int">Num. Int:</div>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="num_int" id="num_int" placeholder="Ingresa tu numero">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>
            <p class="formulario__input-error">Error, por favor ingresa un dato válido.</p>
            <p class="formulario__input-mensaje">Complete el campo en caso de existir</p>

        </div>

         <!-- Grupo: CP -->
         <div class="formulario__grupo" id="grupo__cp">
            <div class="field">
                <div class="label" for="cp">CP:</div>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="cp" id="cp" placeholder="Ingresa tu codigo postal">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>
            <p class="formulario__input-error">Error, por favor ingresa un CP válido de 5 digitos.</p>
        </div>



        <div class="field">
            <button class="firstNext next">Next</button>
        </div>

          <!--  Mensaje para marcar que hay campos incorrectos en el formulario -->
            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i>
                    <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

    </div>
<!--     ************************** FIN PRIMER STEP  **************************** -->

<!--     ************************** Segundo STEP  **************************** -->

                <div class="page">
                    <div class="title">Dependencia:</div>
                    <br>
                    <!-- Grupo: Nombre dependencia -->
                    <div class="formulario__grupo" id="grupo__nombre_depen">
                        <div class="field">
                            <div class="label" for="nombre_depen">Nombre de Dependencia:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre_depen" id="nombre_depen" placeholder="Ingresa la dependencia">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Error, por favor ingresa una dependencia válida. </p>
                    </div>

                    <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="next-1 next">Next</button>
                    </div>

                        <!--  Mensaje para marcar que hay campos incorrectos en el formulario -->
                    <div class="formulario__mensaje" id="formulario__mensaje2">
                    <p><i class="fas fa-exclamation-triangle"></i>
                    <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                    </div>
                </div>

<!--     ************************** FIN SEGUNDO STEP  **************************** -->

<!--     ************************** TERCER STEP  **************************** -->

                <div class="page">
                    <div class="title">Responsable Directo:</div>
                    <br>
                    <!-- Grupo: Nombre  -->
                    <div class="formulario__grupo" id="grupo__nom_responsable">
                        <div class="field">
                            <div class="label" for="nom_responsable">Nombre:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nom_responsable" id="nom_responsable" placeholder="Ingresa el nombre del responsable">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Error, por favor ingresa un nombre válido. </p>
                    </div>

                    <!-- Grupo: AP PAterno -->
                    <div class="formulario__grupo" id="grupo__ap_responsable">
                        <div class="field">
                            <div class="label" for="ap_responsable">Apellido Paterno:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="ap_responsable" id="ap_responsable" placeholder="Ingresa el apellido paterno del responsable">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Error, por favor ingresa un apellido válido.</p>
                    </div>

                    <!-- Grupo: Apellido Materno -->
                    <div class="formulario__grupo" id="grupo__am_responsable">
                        <div class="field">
                            <div class="label" for="am_responsable">Apellido Materno:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="am_responsable" id="am_responsable" placeholder="Ingresa el apellido materno del responsable">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Error, por favor ingresa un apellido válido.</p>
                    </div>

                    <!-- Grupo:Telefono -->
                    <div class="formulario__grupo" id="grupo__telefono">
                        <div class="field">
                            <div class="label" for="telefono">Telefono:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Ingresa tu telefono de casa">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Error, por favor ingresa un teléfono de 10 números.</p>
                    </div>
                    <!-- Grupo: Email -->
                    <div class="formulario__grupo" id="grupo__email_responsable">
                        <div class="field">
                            <div class="label" for="email_responsable">E-mail:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="email_responsable" id="email_responsable" placeholder="correo@correo.com">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Error, por favor ingresa una dirección válida.</p>
                </div>
                        <div class="field btns">
                            <button class="prev-2 prev">Previous</button>
                            <button class="next-2 next">Next</button>
                        </div>

                        <!--  Mensaje para marcar que hay campos incorrectos en el formulario -->
                        <div class="formulario__mensaje" id="formulario__mensaje3">
                        <p><i class="fas fa-exclamation-triangle"></i>
                        <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>
                </div>
<!--     ************************** FIN TERCER STEP  **************************** -->

<!--     ************************** CUARTO STEP  **************************** -->
                <div class="page">
                    <div class="title">Fechas:</div>
                    <br>
                    <!-- Grupo: No. de Registro -->
                    <div class="formulario__grupo" id="grupo__No_registro">
                        <div class="field">
                            <div class="label" for="No_registro">No. de Registro:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="No_registro" id="No_registro" placeholder="Ingresa el numero de registro">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Error, formato incorrecto.</p>
                    </div>

                        <!-- Grupo: Fecha de Inicio -->
                        <div class="field">
                            <div class="label" for="fecha_inicio">Fecha de Inicio:</div>
                            <input type="date" value="2021-05-02" min="2020-01-01" max="2021-12-01" name="fecha_inicio" id="fecha_inicio">
                        </div>
                        <!-- Grupo: Fecha de Termino -->
                        <div class="field">
                            <div class="label" for="fecha_termino">Fecha de Término:</div>
                            <input type="date" value="2021-05-02" min="2020-01-01" max="2021-12-01" name="fecha_termino" id="fecha_termino">
                        </div>
                        <!-- Grupo: Fecha de Inscripcion -->
                        <div class="field">
                            <div class="label" for="fecha_inscripcion">Fecha de Inscripción:</div>
                            <input type="date" value="2021-05-02" min="2020-01-01" max="2021-12-01" name="fecha_inscripcion" id="fecha_inscripcion">
                        </div>
                        <div class="field btns">
                            <button class="prev-3 prev">Previous</button>
                            <button class="submit">Submit</button>
                        </div>

                        <!--  Mensaje para marcar que hay campos incorrectos en el formulario -->
                        <div class="formulario__mensaje" id="formulario__mensaje4">
                            <p><i class="fas fa-exclamation-triangle"></i>
                            <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                            </div>
                </div>
<!--     ************************** FIN CUARTO  STEP  **************************** -->


            </form>
        </div>
    </div>

<!-- *******************  Fin del Container **********************************-->
</div>
@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.js')}}"></script>



@endsection
