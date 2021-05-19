@extends('Pantallas_Principales.navbarRegisterForm')

@section('title', 'Registro')

@section('css')

<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/RegisterForm_V2.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
@endsection

@section('content')
<script>
    function solonumeros(e){
        key=e.keyCode||e.wich;

        teclado=String.fromCharCode(key);

        numeros="0123456789";

        especiales="8-37-38-46";

        teclado_especial=false;

        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }

        if(numeros.indexOf(teclado)==-1 && !teclado_especial){
            return false;
        }

    }
    </script>


<script>
    function sololetras(e){
        key=e.keyCode||e.wich;

        teclado=String.fromCharCode(key);

        letras="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóúÁÉÍÓÚ";

        especiales="8-37-38-46";

        teclado_especial=false;

        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }

        if(letras.indexOf(teclado)==-1 && !teclado_especial){
            return false;
        }

    }
</script>

<script>
    function sololetrasespacio(e){
        key=e.keyCode||e.wich;

        teclado=String.fromCharCode(key);

        letras="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóúÁÉÍÓÚ ";

        especiales="8-37-38-46";

        teclado_especial=false;

        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }

        if(letras.indexOf(teclado)==-1 && !teclado_especial){
            return false;
        }

    }
</script>


<!-- **************************** INICIO FORMULARIO STEP BY STEP **************************** -->
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
        <form action="{{route('registros.store')}}" method="POST" autocomplete="off" id="registro">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>


            <div class="page slide-page">
                <div class="title">Datos Personales:</div>
                <br>
                    <div class="field">
                        <div class="label" for="nombre">Nombre(s):</div>
                        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre completo" maxlength="60" onkeypress="return sololetrasespacio(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="ap_paterno">Apellido Paterno:</div>
                        <input type="text" name="ap_paterno" id="ap_paterno" placeholder="Ingresa tu apellido paterno" maxlength="60" onkeypress="return sololetras(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="ap_materno">Apellido Materno:</div>
                        <input type="text" name="ap_materno" id="ap_materno" placeholder="Ingresa tu apellido materno" maxlength="60" onkeypress="return sololetras(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="telefono">Telefono de Casa:</div>
                        <input type="text" name="telefono" id="telefono" placeholder="Ingresa tu telefono" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="celular">Telefono Celular:</div>
                        <input type="text" name="celular" id="celular" placeholder="Ingresa tu número de celular" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
                    </div>

                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>


            <div class="page">
                <div class="title">Domicilio:</div>
                <br>

                <div class="field">
                    <div class="label" for="ciudad">Ciudad:</div>
                    <input type="text" name="ciudad" id="ciudad" placeholder="Ingresa tu ciudad" required maxlength="60" onkeypress="return sololetras(event)">
                </div>
                <div class="field">
                    <div class="label" for="alcaldia">Alcaldia/Municipio:</div>
                    <input type="text" name="alcaldia" id="alcaldia" placeholder="Ingresa tu alcaldia o municipio" required maxlength="60" onkeypress="return sololetras(event)">
                </div>
                <div class="field">
                    <div class="label" for="colonia">Colonia:</div>
                    <input type="text" name="colonia" id="colonia" placeholder="Ingresa tu colonia" required maxlength="60" onkeypress="return sololetras(event)">
                </div>
                <div class="field">
                    <div class="label" for="calle">Calle:</div>
                    <input type="text" name="calle" id="calle" placeholder="Ingresa tu calle" required maxlength="60">
                </div>
                <div class="field">
                    <div class="label" for="num_ext">Numero Ext.:</div>
                    <input type="text" name="num_ext" id="num_ext" placeholder="Ingresa tu numero exterior" required maxlength="5" onkeypress="return solonumeros(event)">
                </div>
                <div class="field">
                    <div class="label" for="num_int">Numero Int.:</div>
                    <input type="text" name="num_int" id="num_int" placeholder="Ingresa tu numero interior" required maxlength="5" onkeypress="return solonumeros(event)">
                </div>
                <div class="field">
                    <div class="label" for="cp">CP:</div>
                    <input type="text" name="cp" id="cp" placeholder="Ingresa tu codigo postal" required maxlength="5" onkeypress="return solonumeros(event)">
                </div>

                    <div class="field btns">
                        <button class="prev-1 prev">Previous</button>
                        <button class="next-1 next">Next</button>
                    </div>
            </div>


            <div class="page">
                <div class="title">Datos Escolares:</div>
                <br>
                <div class="field">
                    <div class="label" for="carrera">Carrera:</div>
                    <div class="col-md-6" type="text">
                        <select type="text" name="carrera" id="carrera">
                        <!--<option value="1"> Superadmin </option>-->
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
                <div class="field">
                    <div class="label" for="semestre">Semestre:</div>
                    <div class="col-md-6" type="text">
                        <select type="text" name="semestre" id="semestre">
                        <!--<option value="1"> Superadmin </option>-->
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

                <div class="field">
                    <div class="label" for="grupo">Grupo:</div>
                    <input type="text" name="grupo" id="grupo" placeholder="Ingresa tu grupo" required maxlength="5">
                </div>
                <div class="field">
                    <div class="label" for="turno">Turno:</div>
                    <div class="col-md-6" type="text">
                        <select type="text" name="turno" id="turno">
                        <!--<option value="1"> Superadmin </option>-->
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
            </div>


            <div class="page">
                <div class="title">Datos de Usuario:</div>
                <br>
                     <div class="field">
                        <div class="label" for="id">Matricula:</div>
                        <input type="text" name="id" id="id" placeholder="Ingresa tu matricula" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="email">E-mail:</div>
                        <input type="text" name="email" id="email" placeholder="correo@hotmail.com" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                    </div>
                    <div class="field">
                        <div class="label" for="password">Password:</div>
                        <input type="password" name="password" id="password" placeholder="Contraseña" required>
                    </div>

                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button class="submit">Submit</button>
                    </div>
            </div>


        </form>
    </div>
</div>

<!-- *******************  Fin del Container **********************************-->
</div>





@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Principales/RegisterForm_V2.js')}}"></script>
@endsection
