@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Imagenes Banner Practicas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/RegisterBannerPracticas.css')}}">
@endsection

@section('content')
<section class="section-main">
  <h1>Subida de imagenes para practicas
  </h1>
</section>

<div class="container-fluid bg-dark py-5" >
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
    <form action="{{route('registrosImagenesP.store')}}" method="POST" enctype="multipart/form-data">
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
</div>
@endsection

@section('script')
  <script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("Banner_Practicas");
    activo.classList.add("active");
    activo = document.getElementById("Banner_Registro");
    activo.classList.add("active");
  </script>
@endsection
