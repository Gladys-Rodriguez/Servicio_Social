@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

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

