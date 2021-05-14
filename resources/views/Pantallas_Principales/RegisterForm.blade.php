@extends('Pantallas_Principales.navbarRegisterForm')

@section('title', 'Registro')

@section('css')

<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/RegisterForm_V2.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
@endsection

@section('content')

<!-- **************************** INICIO FORMULARIO STEP BY STEP **************************** -->
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
        <form action="{{route('registros.store')}}" method="POST" autocomplete="off" id="registro">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>


            <div class="page slide-page">
                <div class="title">Datos Personales:</div>
                <br>
                    <div class="field">
                        <div class="label" for="nombre">Nombre(s):</div>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div class="field">
                        <div class="label" for="ap_paterno">Apellido Paterno:</div>
                        <input type="text" name="ap_paterno" id="ap_paterno">
                    </div>
                    <div class="field">
                        <div class="label" for="ap_materno">Apellido Materno:</div>
                        <input type="text" name="ap_materno" id="ap_materno">
                    </div>
                    <div class="field">
                        <div class="label" for="telefono">Telefono de Casa:</div>
                        <input type="text" name="telefono" id="telefono">
                    </div>
                    <div class="field">
                        <div class="label" for="celular">Telefono Celular:</div>
                        <input type="text" name="celular" id="celular">
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
                    <input type="text" name="ciudad" id="ciudad">
                </div>
                <div class="field">
                    <div class="label" for="alcaldia">Alcaldia o Municipio:</div>
                    <input type="text" name="alcaldia" id="alcaldia">
                </div>
                <div class="field">
                    <div class="label" for="colonia">Colonia:</div>
                    <input type="text" name="colonia" id="colonia">
                </div>
                <div class="field">
                    <div class="label" for="calle">Calle:</div>
                    <input type="text" name="calle" id="calle">
                </div>
                <div class="field">
                    <div class="label" for="num_ext">Numero Ext.:</div>
                    <input type="text" name="num_ext" id="num_ext">
                </div>
                <div class="field">
                    <div class="label" for="num_int">Numero Int.:</div>
                    <input type="text" name="num_int" id="num_int">
                </div>
                <div class="field">
                    <div class="label" for="cp">CP:</div>
                    <input type="Number" name="cp" id="cp">
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
                    <input type="text" name="carrera" id="carrera">
                </div>
                <div class="field">
                    <div class="label" for="semestre">Semestre:</div>
                    <input type="text" name="semestre" id="semestre">
                </div>
                <div class="field">
                    <div class="label" for="grupo">Grupo:</div>
                    <input type="text" name="grupo" id="grupo">
                </div>
                <div class="field">
                    <div class="label" for="turno">Turno:</div>
                    <input type="text" name="turno" id="turno">
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
                        <input type="text" name="id" id="id">
                    </div>
                    <div class="field">
                        <div class="label" for="email">E-mail:</div>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="field">
                        <div class="label" for="password">Password:</div>
                        <input type="text" name="password" id="password">
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
