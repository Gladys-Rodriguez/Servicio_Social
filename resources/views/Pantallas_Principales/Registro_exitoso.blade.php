@extends('Pantallas_Principales.navbarRegistro_exitoso')

@section('title', 'Registro exitoso')

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

<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"REGISTRO"</h3>
      </div>
    <!--Formulario-->
    <div class="login-box">
    <form action="{{route('registros.store')}}" method="POST">
          @csrf
        <!-- USERNAME INPUT -->
        <label>Matricula</label>
        <input type="text" name="id" placeholder="Ingresa valores númericos" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
        <!-- USERNAME INPUT -->
        <label>Correo Institucional</label>
        <input type="email" name="email" placeholder="correo@hotmail.com" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
        <!-- PASSWORD INPUT -->
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Registrar</button>



      </form>

    </div>


     </div>
</div>
@endsection
