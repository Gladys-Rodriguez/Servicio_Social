@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_datosPersonalesA')

@section('title', 'Editar datos de alumno')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/EditarAlumnoV2.css')}}">
@endsection

@section('content')
<!-- **************************** INICIO FORMULARIO STEP BY STEP **************************** -->
<br>
<div class="espacio"> </div>
<h2>Recorra cada uno de sus datos para poder avanzar en la edición.</h2>
<div class="container">
<div class="progress-bar">
    <div class="step">
        <p>Personal</p>
            <div class="bullet">
                <span></span>
            </div>
     <div class="check fas fa-check"></div>
    </div>
    <div class="step">
        <p>Domicilio</p>
            <div class="bullet">
                <span></span>
            </div>
    <div class="check fas fa-check"></div>
    </div>
    <div class="step">
        <p>Escolares</p>
            <div class="bullet">
                <span></span>
            </div>
    <div class="check fas fa-check"></div>
    </div>
    <div class="step">
        <p>Usuario</p>
            <div class="bullet">
                <span></span>
            </div>
    <div class="check fas fa-check"></div>
    </div>
</div>
<!-- ************************** INICIO DEL FORMULARIO ********************************** -->
<div class="form-outer">
    <div class="separa">
        <form action="/EditarAlumnoForm2/{{$Users->id}}" method="POST" autocomplete="off" id="formulario">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            @method('put')

<!--     **************************   PRIMER STEP  **************************** -->
            <div class="page slide-page">
                <div class="title">Datos Personales:</div>
                <br>
                <!-- Grupo: Nombre -->
                <div class="formulario__grupo" id="grupo__nombre">
                    <div class="field">
                        <div class="label" for="nombre">Nombre(s):</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Ingresa tu nombre completo" value="{{$alumnos->pluck('nombre')->first()}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>

                    </div>
                    <p class="formulario__input-error">El nombre no puede contener caracteres especiales.</p>

                </div>
                <!-- Grupo: Apellido Paterno -->
                <div class="formulario__grupo" id="grupo__ap_paterno">
                    <div class="field">
                        <div class="label" for="ap_paterno">Apellido Paterno:</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="ap_paterno" id="ap_paterno" placeholder="Ingresa tu apellido paterno" value="{{$alumnos->pluck('ap_paterno')->first()}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">El Apellido Paterno no puede contener caracteres especiales.</p>
                </div>
                <!-- Grupo: Apellido Materno -->
                <div class="formulario__grupo" id="grupo__ap_materno">
                        <div class="field">
                            <div class="label" for="ap_materno">Apellido Materno:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="ap_materno" id="ap_materno" placeholder="Ingresa tu apellido materno" value="{{$alumnos->pluck('ap_materno')->first()}}">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">El Apellido Materno no puede contener caracteres especiales.</p>
                    </div>

                <!-- Grupo: Telefono -->
                <div class="formulario__grupo" id="grupo__telefono">
                        <div class="field">
                            <div class="label" for="telefono">Telefono Local:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Ingresa tu telefono de casa" value="{{$alumnos->pluck('telefono')->first()}}">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">El Telefono no puede contener caracteres especiales.</p>
                    </div>
                <!-- Grupo: Celular -->
                <div class="formulario__grupo" id="grupo__celular">
                        <div class="field">
                            <div class="label" for="celular">Telefono Celular:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="celular" id="celular" placeholder="Ingresa tu telefono celular" value="{{$alumnos->pluck('celular')->first()}}" >
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">El Telefono no puede contener caracteres especiales.</p>
                    </div>

                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                <!--    Mensaje para marcar que hay campos incorrectos en el formulario -->
                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                    </div>
                </div>

<!--     **************************  FIN PRIMER STEP  **************************** -->

<!--     **************************   SEGUNDO STEP  **************************** -->
            <div class="page">
                <div class="title">Domicilio:</div>
                <br>
                 <!-- Grupo: Ciudad -->
                 <div class="formulario__grupo" id="grupo__ciudad">
                    <div class="field">
                        <div class="label" for="ciudad">Ciudad:</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="ciudad" id="ciudad" placeholder="Ingresa tu Ciudad" value="{{$alumnos->pluck('ciudad')->first()}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">La ciudad no puede contener caracteres especiales.</p>
                </div>

                 <!-- Grupo: Alcaldia/Municipio -->
                <div class="formulario__grupo" id="grupo__alcaldia">
                    <div class="field">
                        <div class="label" for="alcaldia">Alcaldia/Municipio:</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="alcaldia" id="alcaldia" placeholder="Ingresa tu Alcaldia o Municipio" value="{{$alumnos->pluck('alcaldia')->first()}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">Tu alcaldia no puede contener caracteres especiales.</p>
                </div>
                 <!-- Grupo: Colonia -->
                 <div class="formulario__grupo" id="grupo__colonia">
                    <div class="field">
                        <div class="label" for="colonia">Colonia:</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="colonia" id="colonia" placeholder="Ingresa tu colonia" value="{{$alumnos->pluck('colonia')->first()}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">Tu colonia no puede contener caracteres especiales.</p>
                </div>

                 <!-- Grupo: Calle -->
                 <div class="formulario__grupo" id="grupo__calle">
                    <div class="field">
                        <div class="label" for="calle">Calle:</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="calle" id="calle" placeholder="Ingresa tu Calle" value="{{$alumnos->pluck('calle')->first()}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">Tu calle no puede contener caracteres especiales.</p>
                </div>

                 <!-- Grupo: Numero Ext. -->
                 <div class="formulario__grupo" id="grupo__num_ext">
                    <div class="field">
                        <div class="label" for="ap_materno">Numero Ext.:</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="num_ext" id="num_ext" placeholder="Ingresa tu numero ext" value="{{$alumnos->pluck('num_ext')->first()}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">No has ingresado ningún dato.</p>
                </div>

                 <!-- Grupo: Numero Int -->
                <div class="formulario__grupo" id="grupo__num_int">
                    <div class="field">
                        <div class="label" for="num_int">Num. Int:</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="num_int" id="num_int" placeholder="Ingresa tu numero" value="{{$alumnos->pluck('num_int')->first()}}">
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
                            <input type="text" class="formulario__input" name="cp" id="cp" placeholder="Ingresa tu codigo postal" value="{{$alumnos->pluck('cp')->first()}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">Error, por favor ingresa un CP válido de 5 digitos.</p>
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
<!--     **************************   TERCER STEP  **************************** -->
            <div class="page">
                <div class="title">Datos Escolares:</div>
                <br>

                <!-- Grupo: Carrera -->
                <div class="field">
                    <div class="label" for="carrera">Carrera:</div>
                    <div class="col-md-6" type="text">
                        <select type="text" name="carrera" id="carrera" value="">
                        <!--<option value="1"> Superadmin </option>-->
                        <option value="{{$Users->alumnos->carrera}}"> {{$Users->alumnos->carrera}}</option>
                        <option value="Técnico en informática"> Técnico en informática</option>
                        <option value="Técnico en contaduría"> Técnico en contaduría  </option>
                        <option value="Técnico en administración"> Técnico en administración  </option>
                        <option value="Técnico en administración de empresas turísticas"> Técnico en administración de empresas turísticas</option>
                        <option value="Técnico en gestión de la ciberseguridad"> Técnico en gestión de la ciberseguridad</option>
                        </select>
                        @error('carrera')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                </div>


                <!-- Grupo: Semestre -->
                <div class="field">
                    <div class="label" for="semestre">Semestre:</div>
                    <div class="col-md-6" type="text">
                        <select type="text" name="semestre" id="semestre" value="">
                        <!--<option value="1"> Superadmin </option>-->
                        <option value="{{$Users->alumnos->semestre}}"> {{$Users->alumnos->semestre}} </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>
                        <option value="6"> 6</option>
                        </select>
                        @error('semestre')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                </div>

                <!-- Grupo: Grupo -->
                <div class="formulario__grupo" id="grupo__grupo">
                    <div class="field">
                        <div class="label" for="grupo">Grupo:</div>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="grupo" id="grupo" placeholder="Ingresa tu grupo" value="{{$Users->alumnos->grupo}}">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">Tu grupo no puede contener caracteres especiales.</p>
                </div>

                <!-- Grupo: Turno -->
                <div class="field">
                    <div class="label" for="turno">Turno:</div>
                    <div class="col-md-6" type="text">
                        <select type="text" name="turno" id="turno" value="">
                        <!--<option value="1"> Superadmin </option>-->
                        <option value="{{$Users->alumnos->turno}}" selected> {{$Users->alumnos->turno}} </option>
                        <option value="Matutino"> Matutino </option>
                        <option value="Vespertino"> Vespertino </option>
                        <option value="Mixto"> Mixto </option>
                        </select>
                        @error('turno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
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
<!--     **************************   FIN TERCER STEP  **************************** -->
<!--     **************************   CUARTO STEP  **************************** -->
            <div class="page">
                <div class="title">Datos de Usuario:</div>
                <br>

                <!-- Grupo: Matricula. -->
                    <div class="formulario__grupo" id="grupo__id">
                        <div class="field">
                            <div class="label" for="id">Matricula:</div>
                            <div class="formulario__grupo-input">
                                <input  type="text" class="formulario__input" name="id" id="id" placeholder="Ingresa tu matricula" value="{{$Users->id}}" readonly="readonly">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Tu matricula no puede contener caracteres especiales.</p>
                    </div>

                <!-- Grupo: Email -->
                <div class="formulario__grupo" id="grupo__email">
                        <div class="field">
                            <div class="label" for="email">E-mail:</div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="email" id="email" placeholder="correo@hotmail.com" value="{{$Users->email}}" readonly="readonly">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">Tu email es incorrecto.</p>
                </div>

                <!-- Grupo: Password -->
            <!--     <div class="formulario__grupo" id="grupo__password">
                        <div class="field">
                            <div class="label" for="password">Password:</div>
                            <div class="formulario__grupo-input">
                                <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                        </div>
                        <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
                </div> -->

                <!-- Grupo: Password2 -->
            <!--    <div class="formulario__grupo" id="grupo__password2">
                    <div class="field">
                        <div class="label" for="password2">Repetir Contraseña:</div>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password2" id="password2" placeholder="Contraseña">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
            </div> -->

                <div class="formulario__mensaje" id="formulario__mensaje4">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>

                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button type="submit" class="submit" class="formulario__btn">Submit</button>


                    </div>




             </div>
<!--     **************************   FIN CUARTO STEP  **************************** -->

        </form>

    </div>
</div>

<!-- *******************  Fin del Container **********************************-->
</div>

@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<!--<script src="{{asset('js/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.js')}}"></script>-->
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Principales/EditarAlumnoV2.js')}}"></script>
@endsection
