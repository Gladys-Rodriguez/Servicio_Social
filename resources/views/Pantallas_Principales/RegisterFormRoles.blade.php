@extends('Pantallas_Principales.navbarRegisterFormRoles')

@section('title', 'Registro')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/RegisterFormRoles.css')}}">
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
    <form action="{{route('registrosRoles.store')}}" method="POST">
          @csrf
        <!-- matricula INPUT -->
        <label>Matricula</label>
        <input type="text" name="id" placeholder="Ingresa valores númericos" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
         <!-- nombre INPUT -->
         <label>Nombre completo</label>
        <input type="text" name="name" placeholder="Ingresa tu nombre completo" required minlength="10" maxlength="60" onkeypress="return sololetras(event)">
        <!-- correo INPUT -->
        <label>Correo Institucional</label>
        <input type="email" name="email" placeholder="correo@hotmail.com" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
        <!-- PASSWORD INPUT -->
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" required>

        <label>Rol</label>
        <div class="col-md-6" type="text">
             <select name="id_rol">
                 <!--<option value="1"> Superadmin </option>-->
                 <option value="2"> Admin Servicio Social </option>
                 <option value="3"> Admin Becas </option>
                 <option value="4"> Admin Prácticas </option>
             </select>
                 @error('id_rol')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                 @enderror
        </div>
        <br>

        <button type="submit">Registrar</button>



      </form>

    </div>


     </div>
</div>
@endsection
