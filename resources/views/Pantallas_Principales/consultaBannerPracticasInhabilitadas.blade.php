@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Consulta Banner Practicas Inhabilitadas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/consultaBannerPracticas.css')}}">
@endsection

@section('content')

<section class="section-main">
  <h1>Consulta de Imagenes Inhabilitadas Banner Prácticas
  </h1>
</section>

<div class="container-fluid bg-dark py-5" >
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Imagenes de practicas inhabilitadas"</h3>
      </div>

    <div class="tabla-consulta">
         <table border="1">
             <tr>
                 <td></td>
                 <td>Id imagen</td>
                 <td>Imagen</td>

            </tr>
               @foreach($bannerPracticas as $bannerPracticass)
               <tr>
                 <td>
                 <?php /*<a class="boton_personalizado" href="{{url('showPrueba', $bannerServicio->id)}}">Ver</a> */ ?>
                 <a class="boton_personalizado" href="/EditarFormBannerPracticas/{{$bannerPracticass->id}}">Editar</a>
                 <td>{{$bannerPracticass->id}}</td>
                 <td><img src="img/carrusel/{{$bannerPracticass->ruta}}" width="150"/></td>

                <tr>
               @endforeach
        </table>
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
    activo = document.getElementById("Banner_Inhabilitadas");
    activo.classList.add("active");
  </script>
@endsection
