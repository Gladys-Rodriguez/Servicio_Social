@extends('Pantallas_Principales.navbarRegisterBannerInicio')

@section('title', 'Imagenes Banner Home')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/RegisterBannerInicio.css')}}">
@endsection

@section('content')
<br>
<div class="container">
<div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Subir imagen"</h3>

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
    <form action="{{route('registrosImagenesI.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <!-- Imagen INPUT -->
        <label>Imagen</label>
        <input type="file" name="ruta" placeholder="Examinar imagen" accept="image/*">
        <br>
        @error('ruta')
            <small class="text-danger">{{$message}} </small>
        @enderror

        <label>Estado</label>
        <div class="col-md-6" type="text">
             <select name="estado">
                 <!--<option value="1"> Superadmin </option>-->
                 <option value="1"> Publicar </option>
                 <option value="0"> Ocultar </option>
             </select>
                 @error('estado')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                 @enderror
        </div>
        <br>

        <button type="submit">Subir imagen</button>



      </form>

    </div>


     </div>
</div>
@endsection
