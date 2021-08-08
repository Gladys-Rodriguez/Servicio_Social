@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Solicitudes a revisar')

@section('content')
<section class="section-main">
	<h1>SOLICITUDES</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white mb-5 p-5" style="min-height: 600px">
        <div class="display-4 mb-4">Solicitudes a<div class="d-inline text-warning"> <strong>Revisar </strong></div></div>
    
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
    activo = document.getElementById("Solicitud_Revisar");
    activo.classList.add("active");
  </script>
@endsection