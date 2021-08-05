@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')



@section('content')
<section class="section-main">
	<h1>SOLICITUDES NUEVAS</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white mb-5 p-5" style="min-height: 600px">
        <div class="display-4 mb-4">Solicitudes <div class="d-inline text-warning"> <strong>Nuevas </strong></div></div>
    
        @include('Pantallas_Admin_Practicas_Visitas.SolicitudesIndexTabla')
	</div>
</div>
@endsection