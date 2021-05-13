@extends('Pantallas_Principales.navbarpruebaEditarForm')

@section('title', 'Prueba editar datos')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/pruebaEditarForm.css')}}">
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
<div class="informacion" >
      <div class="contact-info">
        <h3 class="title">"Editar datos"</h3>

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
    <form action="/pruebaEditarForm2/{{$Users->id}}" method="POST">
          @csrf
        <!-- MATRICULA INPUT -->
        <label>Matricula</label>
        <input type="text" name="id" value="{{$Users->id}}" placeholder="Ingresa valores númericos" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
        <input type="hidden" name="_method" value="PUT">
        <!-- nombre INPUT -->
        <!--<label>Nombre completo</label>
        <input type="text" name="name" value="{{$Users->name}}" placeholder="Ingresa tu nombre completo" required minlength="10" maxlength="60" onkeypress="return sololetras(event)">-->
        <!-- CORREO INPUT -->
        <label>Correo Institucional</label>
        <input type="email" name="email" value="{{$Users->email}}" placeholder="correo@hotmail.com" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
        <!-- PASSWORD INPUT -->
        <!--<label>Contraseña</label>
        <input type="password" name="password" value="{{$Users->password}}" placeholder="Contraseña" required>-->
        <button type="submit">Actualizar</button>



      </form>

    </div>


     </div>
</div>
@endsection
