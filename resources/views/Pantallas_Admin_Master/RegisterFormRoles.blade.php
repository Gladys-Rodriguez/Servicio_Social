@extends('Pantallas_Admin_Master.navbarRegisterFormRoles')

@section('title', 'Registro')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Master/RegisterFormRoles.css')}}">
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
        <!-- Nombre INPUT -->
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Ingresa el nombre" required maxlength="30" onkeypress="return sololetras(event)">
        <!-- Apellido paterno INPUT -->
        <label>Apellido paterno</label>
        <input type="text" name="ap_paterno" placeholder="Ingresa el apellido paterno" required maxlength="30" onkeypress="return sololetras(event)">
        <!-- Apellido materno INPUT -->
        <label>Apellido materno</label>
        <input type="text" name="ap_materno" placeholder="Ingresa el apellido materno" required maxlength="30" onkeypress="return sololetras(event)">
         <!-- Telefono INPUT -->
         <label>Telefono</label>
         <input type="text" name="telefono" placeholder="Ingresa el telefono" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
         <!-- Celular INPUT -->
         <label>Celular</label>
         <input type="text" name="celular" placeholder="Ingresa el celular" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
         <!-- matricula INPUT -->
        <label>Matricula</label>
        <input type="text" name="id" placeholder="Ingresa valores númericos" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
        <!-- correo INPUT -->
        <label>Correo Institucional</label>
        <input type="email" name="email" placeholder="correo@hotmail.com" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
        <!-- PASSWORD INPUT -->
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" required>
        <!--DESCRIPCION INPUT-->
        <label>Descripción</label>
        <input type="text" name="descripcion" placeholder="Descripción" required>

        <label>Rol</label>
        <div class="col-md-6" type="text">
             <select name="id_rol">
                 <!--<option value="1"> Superadmin </option>-->
                 <option value="2"> Admin Servicio Social </option>
                 <option value="3"> Admin Becas </option>
                 <option value="4"> Admin Prácticas </option>
                 <option value="7"> Pruebas </option>

             </select>
                 @error('id_rol')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                 @enderror
        </div><br>
        <label>Estado</label>
        <div class="col-md-6" type="text">
             <select name="Estado">
                 <option value="1"> Activo </option>
                 <option value="2"> Inactivo </option>
             </select>
        </div> <br>

        <button type="submit">Registrar</button>



      </form>

    </div>


     </div>
     <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
</div>
@endsection
