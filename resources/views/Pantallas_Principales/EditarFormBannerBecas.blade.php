@extends('Pantallas_Principales.navbarEditarFormBannerBecas')

@section('title', 'Prueba editarr datos')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/EditarFormBannerBecas.css')}}">
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
    <form action="/EditarFormBannerBecas2/{{$bannerBecas->id}}" method="POST" enctype="multipart/form-data">
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

    <form action="/EditarFormBannerBecas3/{{$bannerBecas->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="_method" value="DELETE">

          <button type="submit">Eliminar definitivamente la imagen</button>
    </form>

    </div>


     </div>
</div>
@endsection
