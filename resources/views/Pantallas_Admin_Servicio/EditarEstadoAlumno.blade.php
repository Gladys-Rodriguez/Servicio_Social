@extends('Pantallas_Admin_Servicio.navbarEditarEstadoAlumno')

@section('title', 'Editar estado de alumno')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/EditarFormBannerBecas.css')}}">
@endsection

@section('content')
<br>
<div class="container">
<div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Editar estado de alumno"</h3>

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
    <form action="/EditarEstadoAlumno2/{{$Users->id}}" method="POST" enctype="multipart/form-data">
          @csrf
         <input type="hidden" name="_method" value="PUT">
        <label>Estado</label>
        <div class="col-md-6" type="text">
             <select name="status_s">
                 <!--<option value="1"> Superadmin </option>-->
                 <option value="1"> Habilitar </option>
                 <option value="0"> Inhabilitar </option>
             </select>
                 @error('status_s')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                 @enderror
        </div>
        <br>

        <button type="submit">Actualizar</button>
    </form>

    </div>


     </div>
</div>
@endsection
