
@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno2')

<!-- comentario -->
@section('title', 'Nuevo Registro')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.css')}}">
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

        letras="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";

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
            <form action="{{route('NuevoRegistro.store')}}" method="POST" autocomplete="off" id="servicios">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>


                <div class="page slide-page">
                    <div class="title">Dirección de la Dependencia:</div>
                    <br>
                        <div class="field">
                            <div class="label" for="ciudad">Ciudad:</div>
                            <input type="text" name="ciudad" id="ciudad" placeholder="Ingresa la ciudad" required maxlength="60" onkeypress="return sololetras(event)">
                        </div>
                        <div class="field">
                            <div class="label" for="alcaldia">Alcaldia o Municipio:</div>
                            <input type="text" name="alcaldia" id="alcaldia" placeholder="Ingresa la alcaldia o municipio" required maxlength="60" onkeypress="return sololetras(event)">
                        </div>
                        <div class="field">
                            <div class="label" for="colonia">Colonia:</div>
                            <input type="text" name="colonia" id="colonia" placeholder="Ingresa la colonia" required maxlength="60" onkeypress="return sololetras(event)">
                        </div>
                        <div class="field">
                            <div class="label" for="calle">Calle:</div>
                            <input type="text" name="calle" id="calle" placeholder="Ingresa la calle" required maxlength="60">
                        </div>
                        <div class="field">
                            <div class="label" for="num_ext">Numero Ext.:</div>
                            <input type="text" name="num_ext" id="num_ext" placeholder="Ingresa el numero exterior" required maxlength="5" onkeypress="return solonumeros(event)">
                        </div>
                        <div class="field">
                            <div class="label" for="num_int">Numero Int.:</div>
                            <input type="text" name="num_int" id="num_int" placeholder="Ingresa el numero interior" required maxlength="5" onkeypress="return solonumeros(event)">
                        </div>
                        <div class="field">
                            <div class="label" for="cp">CP:</div>
                            <input type="text" name="cp" id="cp" placeholder="Ingresa el codigo postal" required maxlength="5" onkeypress="return solonumeros(event)">
                        </div>
                        <div class="field">
                            <button class="firstNext next">Next</button>
                        </div>
                    </div>


                <div class="page">
                    <div class="title">Dependencia:</div>
                    <br>

                        <div class="field">
                            <div class="label" for="nombre_depen">Nombre de la Dependencia:</div>
                            <input type="text" name="nombre_depen" id="nombre_depen" placeholder="Ingresa la dependencia" required maxlength="60" onkeypress="return sololetras(event)">
                        </div>

                        <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="next-1 next">Next</button>
                        </div>
                </div>


                <div class="page">
                    <div class="title">Responsable Directo:</div>
                    <br>
                    <div class="field">
                        <div class="label" for="nom_responsable">Nombre:</div>
                        <input type="text" name="nom_responsable" id="nom_responsable" placeholder="Ingresa el nombre completo" maxlength="60" onkeypress="return sololetras(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="ap_responsable">Apellido Paterno:</div>
                        <input type="text" name="ap_responsable" id="ap_responsable" placeholder="Ingresa el apellido paterno" maxlength="60" onkeypress="return sololetras(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="am_responsable">Apellido Materno:</div>
                        <input type="text" name="am_responsable" id="am_responsable" placeholder="Ingresa el apellido materno" maxlength="60" onkeypress="return sololetras(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="telefono">Telefono:</div>
                        <input type="text" name="telefono" id="telefono" placeholder="Ingresa el telefono" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
                    </div>
                    <div class="field">
                        <div class="label" for="email_responsable">E-mail:</div>
                        <input type="text" name="email_responsable" id="email_responsable" placeholder="Ingresa el correo electronico" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                    </div>
                        <div class="field btns">
                            <button class="prev-2 prev">Previous</button>
                            <button class="next-2 next">Next</button>
                        </div>
                </div>


                <div class="page">
                    <div class="title">Fechas:</div>
                    <br>
                         <div class="field">
                            <div class="label" for="No_registro">No. de Registro:</div>
                            <input type="No_registro" name="No_registro" id="No_registro" placeholder="Ingresa el numero de registro" required maxlength="20" onkeypress="return solonumeros(event)">
                        </div>
                        <div class="field">
                            <div class="label" for="fecha_inicio">Fecha de Inicio:</div>
                            <input type="date" value="2021-05-02" min="2020-01-01" max="2021-12-01" name="fecha_inicio" id="fecha_inicio">
                        </div>
                        <div class="field">
                            <div class="label" for="fecha_termino">Fecha de Término:</div>
                            <input type="date" value="2021-05-02" min="2020-01-01" max="2021-12-01" name="fecha_termino" id="fecha_termino">
                        </div>
                        <div class="field">
                            <div class="label" for="fecha_inscripcion">Fecha de Inscripción:</div>
                            <input type="date" value="2021-05-02" min="2020-01-01" max="2021-12-01" name="fecha_inscripcion" id="fecha_inscripcion">
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

<script src="{{asset('js/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.js')}}"></script>
@endsection
