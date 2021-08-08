@extends('Pantallas_Principales.navbarEditarAdminForm')

@section('title', 'Editar datos de usuario')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/EditarAdminForm.css')}}">
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
        <h3 class="title">"Editar estado"</h3>

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

    <form action="/EditarAdminForm2/{{$datos->id}}" method="POST">
          @csrf
          @foreach($nuevo as $nuevos)
          <h1>Datos Generales:</h1>
            <label>Puesto: {{$nuevos->Tipo_rol}}</label>
            <label>Número de empleado: {{$nuevos->id}}</label>
            <label>Nombre: {{$nuevos->fullname}}</label>
            <label>Teléfono: {{$nuevos->telefono}}</label>
            <label>Email: {{$nuevos->email}}</label>
          @endforeach
          <br>
          <hr>
          <input type="hidden" name="_method" value="PUT">
          <label>Cambiar Estado</label>
          <div class="col-md-6" type="text">
             <select name="estado">
                 <option value="1"> Activo </option>
                 <option value="0"> Inactivo </option>
             </select>
        </div> <br>
          <button type="submit">Actualizar</button>



      </form>

    </div>


     </div>
</div>
@endsection
