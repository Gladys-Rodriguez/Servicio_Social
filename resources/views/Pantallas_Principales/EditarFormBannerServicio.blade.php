@extends('Pantallas_Principales.navbarEditarFormBannerServicio')

@section('title', 'Prueba editarr datos')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/EditarFormBannerServicio.css')}}">
@endsection

@section('content')
<br>
<div class="container">
<div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Editar imagen"</h3>

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
    <form action="/EditarFormBannerServicio2/{{$bannerServicio->id}}" method="POST" enctype="multipart/form-data">
          @csrf
         <input type="hidden" name="_method" value="PUT">
        <!-- Imagen INPUT -->
        <label>Imagen</label>
        <input type="file" name="ruta" placeholder="Examinar imagen" accept="image/*">
        <br>
        @error('ruta')
            <small class="text-danger">{{$message}} </small>
        @enderror
        <button type="submit">Subir nueva imagen</button>
    </form>

    <form action="/EditarFormBannerServicio3/{{$bannerServicio->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="_method" value="DELETE">

          <button type="submit">Eliminar definitivamente la imagen</button>
    </form>

    </div>


     </div>
</div>
@endsection
