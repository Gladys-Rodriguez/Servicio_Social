@extends('Pantallas_Principales.navbarRegisterForm')

@section('title', 'Registro')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/RegisterForm.css')}}">
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

<br>
<div class="container">
<div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Registro"</h3>

      <div class="errores">
       @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        @endif
      </div>

      </div>

    <!--Formulario-->
    <div class="login-box">
    <form action="{{route('registros.store')}}" method="POST">
          @csrf
        <!-- matricula INPUT -->
        <label>Matricula</label>
        <input type="text" name="id" placeholder="Ingresa valores númericos" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
         <!-- nombre INPUT -->
         <!--<label>Nombre completo</label>
        <input type="text" name="name" placeholder="Ingresa tu nombre completo" required minlength="10" maxlength="60" onkeypress="return sololetras(event)">-->
        <!-- correo INPUT -->
        <label>Correo Institucional</label>
        <input type="email" name="email" placeholder="correo@hotmail.com" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
        <!-- PASSWORD INPUT -->
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" required>
        <!-- nombre INPUT -->
        <label>Nombre completo</label>
        <input type="text" name="nombre" placeholder="Ingresa tu nombre" required maxlength="60" onkeypress="return sololetras(event)">
        <!-- Apellido patero input -->
        <label>Apellido paterno</label>
        <input type="text" name="ap_paterno" placeholder="Ingresa tu apellido paterno" required maxlength="60" onkeypress="return sololetras(event)">
        <!-- Apellido materno input -->
        <label>Apellido materno</label>
        <input type="text" name="ap_materno" placeholder="Ingresa tu apellido paterno" required maxlength="60" onkeypress="return sololetras(event)">
        <!-- telefono input -->
        <label>Telefono</label>
        <input type="text" name="telefono" placeholder="Ingresa tu telefono" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
         <!-- telefono input -->
        <label>Celular</label>
        <input type="text" name="celular" placeholder="Ingresa tu celular" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
         <!-- ciudad input -->
         <label>Ciudad</label>
         <input type="text" name="ciudad" placeholder="Ingresa tu ciudad" required maxlength="60" onkeypress="return sololetras(event)">
         <!-- alcaldia input -->
         <label>Alcaldia</label>
         <input type="text" name="alcaldia" placeholder="Ingresa tu alcaldia" required maxlength="60" onkeypress="return sololetras(event)">
         <!-- colonia input -->
         <label>Colonia</label>
         <input type="text" name="colonia" placeholder="Ingresa tu colonia" required maxlength="60" onkeypress="return sololetras(event)">
         <!-- calle input -->
         <label>Calle</label>
         <input type="text" name="calle" placeholder="Ingresa tu calle" required maxlength="60">
         <!-- numero exterior input -->
         <label>Numero Exterior</label>
         <input type="text" name="num_ext" placeholder="Ingresa tu numero exterior" required maxlength="10" onkeypress="return solonumeros(event)">
          <!-- numero interior input -->
          <label>Numero Interior</label>
         <input type="text" name="num_int" placeholder="Ingresa tu numero interior" required maxlength="10" onkeypress="return solonumeros(event)">
         <!-- Codigo postal input -->
         <label>Codigo Postal</label>
         <input type="text" name="cp" placeholder="Ingresa tu codigo postal" required maxlength="10" onkeypress="return solonumeros(event)">
         <!-- Carrera input -->
         <label>Carrera</label>
         <input type="text" name="carrera" placeholder="Ingresa tu carrera" required maxlength="20" onkeypress="return sololetras(event)">
         <!-- Semestre input -->
         <label>Semestre</label>
         <input type="text" name="semestre" placeholder="Ingresa tu semestre" required maxlength="10" onkeypress="return solonumeros(event)">
         <!-- Grupo input -->
         <label>Grupo</label>
         <input type="text" name="grupo" placeholder="Ingresa tu grupo" required maxlength="5">
         <!-- Grupo input -->
         <label>Turno</label>
         <input type="text" name="turno" placeholder="Ingresa tu turno" required maxlength="11" onkeypress="return sololetras(event)">

        <button type="submit">Registrar</button>



      </form>

    </div>


     </div>
</div>
@endsection
