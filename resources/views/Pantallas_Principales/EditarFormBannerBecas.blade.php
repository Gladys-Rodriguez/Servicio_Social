@extends('Pantallas_Principales.navbarEditarFormBannerBecas')

@section('title', 'Editar banner de becas')

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

        <button type="submit">Actualizar</button>
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
