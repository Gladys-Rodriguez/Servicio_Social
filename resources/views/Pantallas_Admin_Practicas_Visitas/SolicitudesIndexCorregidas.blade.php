@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Solicitudes con falta de correción')

@section('content')
<section class="section-main">
	<h1>SOLICITUDES CON FALTA DE CORRECCIÓN</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white mb-5 p-5" style="min-height: 600px">
        <div class="display-4 mb-4">Solicitudes mandadas a <div class="d-inline text-warning"> <strong>Corregir</strong></div></div>

        @include('Pantallas_Admin_Practicas_Visitas.SolicitudesIndexTabla')
    </div>
</div>
@endsection

@section('script')
  <script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("menu_visitas");
    activo.classList.add("active");
    activo = document.getElementById("Solicitud_Correccion");
    activo.classList.add("active");
  </script>
@endsection