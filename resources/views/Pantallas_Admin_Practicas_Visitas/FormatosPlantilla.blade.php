@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Formatos de Plantilla')

@section('content')

<section class="section-main">
    <h1> Formatos Plantilla</h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Formatos de <div class="d-inline text-warning"> <strong>Plantilla</strong></div></div>
        @include('Pantallas_Admin_Practicas_Visitas.FormatosTabla')
    </div>
</div>
@endsection

@section('script')
  <script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("Menu_Documentos");
    activo.classList.add("active");
    activo = document.getElementById("Formato_Plantilla");
    activo.classList.add("active");
  </script>
@endsection