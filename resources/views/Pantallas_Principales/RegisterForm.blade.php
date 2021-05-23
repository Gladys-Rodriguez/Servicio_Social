@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno2')


@section('title', 'Registro')

@section('css')

<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/FormRegistro.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


@endsection

@section('content')

<!-- *********** PARTE DE DATOS DE DIRECCION **************** -->

<br>

 <form action="" class="formulario" id="formulario">

    <div class="step step1">


   <!-- <h3 class="title">Datos de Domicilio</h3>
    <br> -->
    <!-- Grupo: Ciudad -->
<!--    <div class="formulario__grupo" id="grupo__ciudad">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="ciudad" id="ciudad" placeholder="CDMX / Edo. Mexico">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
    </div>
-->
    <!-- Grupo: Alcaldia -->
<!--    <div class="formulario__grupo" id="grupo__alcaldia">
        <label for="alcaldia" class="formulario__label">Alcaldia o Municipio</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="alcaldia" id="alcaldia" placeholder="">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
    </div>
-->
    <!-- Grupo: Colonia -->
<!--    <div class="formulario__grupo" id="grupo__colonia">
        <label for="colonia" class="formulario__label">Colonia</label>
        <div class="formulario__grupo-input">
            <input type="colonia" class="formulario__input" name="colonia" id="colonia">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
    </div>
-->
    <!-- Grupo:Calle -->
<!--    <div class="formulario__grupo" id="grupo__calle">
        <label for="calle" class="formulario__label">Calle</label>
        <div class="formulario__grupo-input">
            <input type="calle" class="formulario__input" name="calle" id="calle">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
    </div>
-->
    <!-- Grupo:  Num_Ext -->
<!--    <div class="formulario__grupo" id="grupo__num_ext">
        <label for="num_ext" class="formulario__label">Num. Ext</label>
        <div class="formulario__grupo-input">
            <input type="num_ext" class="formulario__input" name="num_ext" id="num_ext" placeholder="">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
    </div>
-->
    <!-- Grupo: Num_Int -->
<!--    <div class="formulario__grupo" id="grupo__num_int">
        <label for="num_int" class="formulario__label">Num. Int</label>
        <div class="formulario__grupo-input">
            <input type="num_int" class="formulario__input" name="num_int" id="num_int" placeholder="">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
    </div>
-->
    <!-- Grupo: CP -->
<!--    <div class="formulario__grupo" id="grupo__cp">
        <label for="cp" class="formulario__label">C.P.</label>
        <div class="formulario__grupo-input">
            <input type="cp" class="formulario__input" name="cp" id="cp" placeholder="">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
    </div>


    <div class="formulario__mensaje" id="formulario__mensaje">
        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
    </div>
-->
    <!--  <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Next</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>

    </div> -->

    <!--<div class="formulario__grupo formulario__grupo-btn-next">
        <button type="button" class="next-btn">Next</button>
    </div>-->
<!--    <div class="button-group">

        <button id="next" class="button">
           next
        </button>
     </div>

    </div>
<br>
-->
<!-- *********** FIN DE DATOS DE DIRECCION **************** -->

<!-- *********** PARTE DE DATOS PERSONALES **************** -->


<!-- form action="" class="formulario" id="formulario"> -->
    <div class="step step2 hidden" >
    <h3 class="title">Datos Personales</h3>
<br>
    <!-- Grupo: Usuario -->
    <div class="formulario__grupo" id="grupo__usuario">
        <label for="usuario" class="formulario__label">Usuario</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="john123">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
    </div>

    <!-- Grupo: Nombre -->
    <div class="formulario__grupo" id="grupo__nombre">
        <label for="nombre" class="formulario__label">Nombre</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="John Doe">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
    </div>

    <!-- Grupo: Contraseña -->
    <div class="formulario__grupo" id="grupo__password">
        <label for="password" class="formulario__label">Contraseña</label>
        <div class="formulario__grupo-input">
            <input type="password" class="formulario__input" name="password" id="password">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
    </div>

    <!-- Grupo: Contraseña 2 -->
    <div class="formulario__grupo" id="grupo__password2">
        <label for="password2" class="formulario__label">Repetir Contraseña</label>
        <div class="formulario__grupo-input">
            <input type="password" class="formulario__input" name="password2" id="password2">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
    </div>

    <!-- Grupo: Correo Electronico -->
    <div class="formulario__grupo" id="grupo__correo">
        <label for="correo" class="formulario__label">Correo Electrónico</label>
        <div class="formulario__grupo-input">
            <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
    </div>

    <!-- Grupo: Teléfono -->
    <div class="formulario__grupo" id="grupo__telefono">
        <label for="telefono" class="formulario__label">Teléfono</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="4491234567">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
    </div>

    <!-- Grupo: Terminos y Condiciones -->
<!-- <div class="formulario__grupo" id="grupo__terminos">
        <label class="formulario__label">
            <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
            Acepto los Terminos y Condiciones
        </label>
    </div>
-->
<!--    <div class="formulario__mensaje" id="formulario__mensaje">
        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
    </div>
-->
    <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Enviar</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
    </div>

<div class="button-group">
    <button id="previous" class="disabled button" disabled>
       previous
    </button>
    <button id="next" class="button">
       next
    </button>
 </div>
    </div>


</form>



<!-- *********** FIN DE DATOS PERSONALES **************** -->


@endsection

@section('script')
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

<script src="{{asset('js/Pantallas_Alumno_Servicio/FormRegistro.js')}}"></script>
<script src="{{asset('js/Pantallas_Alumno_Servicio/steps.js')}}"></script>

@endsection

