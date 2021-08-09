@extends('Pantallas_Admin_Master.navbarRegisterFormRoles')

@section('title', 'Registro administradores')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Master/RegisterFormRole.css')}}">
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

        letras="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚáéíóú";

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

        letras="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚáéíóú ";

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


      <div class="errores">
       @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        @endif
      </div>
<section class="form-register">
    <h4>Formulario Registro</h4>
    <form action="{{route('registrosRoles.store')}}" method="POST">
    @csrf
    <label for="">Nombre:</label>
    <input class="controls" type="text" name="nombre" id="nombres" placeholder="Ingrese su Nombre" required maxlength="30" onkeypress="return sololetrasespacio(event)">
    <label for="">Apellido Paterno:</label>
    <input class="controls" type="text" name="ap_paterno" id="apellidos" placeholder="Ingrese su Apellido Paterno" required maxlength="30" onkeypress="return sololetras(event)">
    <label for="">Apellido Materno:</label>
    <input class="controls" type="text" name="ap_materno" id="apellidom" placeholder="Ingrese su Apellido Materno" required maxlength="30" onkeypress="return sololetras(event)">
    <label for="">Telefono:</label>
    <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
    <label for="">Telefono:</label>
    <input class="controls" type="text" name="celular" id="celular" placeholder="Ingrese su celular" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
    <label for="">Correo Institucional:</label>
    <input class="controls" type="email" required name="email" id="correo" placeholder="Ingrese su Correo">
    <label for="">Contraseña:</label>
    <input class="controls" type="password" required name="password" id="password" placeholder="Ingrese su Contraseña">
    <label>Número de empleado</label>
    <input class="controls" type="text" name="id" required id="empleado" placeholder="Ingrese Número de Empleado" required minlength="8" maxlength="8" onkeypress="return solonumeros(event)">
    <label for="">Rol:</label>
    <div type="text">
             <select class="controls" name="id_rol">
                 <option value="2"> Admin Servicio Social </option>
                 <option value="3"> Admin Becas </option>
                 <option value="4"> Admin Prácticas </option>
                 <!--<option value="7"> Admin Master </option>-->

             </select>
                 @error('id_rol')
                  <span class="invalid-feedback" role="alert">

                  <strong>{{ $message }}</strong>
                  </span>
                 @enderror
        </div>
        <label for="">Estado</label>
        <div class="col-md-6" type="text">
             <select class="controls" name="estado">
                 <option value="1"> Activo </option>
                 <option value="0"> Inactivo </option>
             </select>
        </div>
    <input class="botons" type="submit" value="Registrar">
</form>
  </section>

    <!--Formulario
    <div class="login-box">
    <form action="{{route('registrosRoles.store')}}" method="POST">
          @csrf
        Nombre INPUT 
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Ingresa el nombre" required maxlength="30" onkeypress="return sololetrasespacio(event)">
        Apellido paterno INPUT 
        <label>Apellido paterno</label>
        <input type="text" name="ap_paterno" placeholder="Ingresa el apellido paterno" required maxlength="30" onkeypress="return sololetras(event)">
        Apellido materno INPUT
        <label>Apellido materno</label>
        <input type="text" name="ap_materno" placeholder="Ingresa el apellido materno" required maxlength="30" onkeypress="return sololetras(event)">
         Telefono INPUT
         <label>Telefono</label>
         <input type="text" name="telefono" placeholder="Ingresa el telefono" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
          Celular INPUT
         <label>Celular</label>
         <input type="text" name="celular" placeholder="Ingresa el celular" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)">
         <matricula INPUT 
        <label>Número de empleado</label>
        <input type="text" name="id" placeholder="Ingresa valores númericos" required minlength="8" maxlength="8" onkeypress="return solonumeros(event)">
         correo INPUT -
        <label>Correo Institucional</label>
        <input type="email" name="email" placeholder="correo@hotmail.com" required ">
        <! PASSWORD INPUT --
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" required>
        <!ROL INPUT--
        <label>Rol</label>
        <div class="col-md-6" type="text">
             <select name="id_rol">
                 <option value="2"> Admin Servicio Social </option>
                 <option value="3"> Admin Becas </option>
                 <option value="4"> Admin Prácticas </option>
                 <option value="7"> Admin Master </option>

             </select>
                 @error('id_rol')
                  <span class="invalid-feedback" role="alert">

                  <strong>{{ $message }}</strong>
                  </span>
                 @enderror
        </div><br>

        <label>Estado</label>
        <div class="col-md-6" type="text">
             <select name="estado">
                 <option value="1"> Activo </option>
                 <option value="0"> Inactivo </option>
             </select>
        </div> <br>

        <button type="submit">Registrar</button>



      </form>

    </div>-->


     </div>

</div>
@endsection
