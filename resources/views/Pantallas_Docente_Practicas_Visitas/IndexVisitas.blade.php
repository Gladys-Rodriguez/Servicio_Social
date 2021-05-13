@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('title')
Prácticas y Visitas Escolares
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}">
@endsection



@section('content')


<section class="section-main">
    <h1>Bienvenido a Prácticas y Visitas Escolares</h1>
</section>

<section class="section-dos">
    <h2>Calendario de Visitas</h2>
    <div class="content-wrapper">
    <img src="{{ asset('img/calendario.png')}}"/>
        
    </div>
</section>

<section class="section-tres">
    <h2>Requistos de Empresas</h2>
    <div class="content-wrapper">
    <a href="">Requisitos_Marinela.pdf</a>
    <a href="">Requisitos_Yakult.pdf</a>
    <a href="">Requisitos_BBVA.pdf</a>
    <a href="">Requisitos_Bimbo.pdf</a>
    <h2>hola</h2>
    </div>
</section>

<section class="section-dos">
    <h2>Descarga de Documentos</h2>
    <div class="content-wrapper2"> 
        <div class="col">
        <h3>Documentos Plantilla</h3>
            <a href="">InformePracticas.pdf</a>
            <a href="">ResumenPracticas.pdf</a>
            <a href="">ListasOficiales.pdf</a>
            <a href="">Oficio.pdf</a>
        </div>
        <div class="col">
        <h3>Ejemplos de LLenado de Documentos</h3>
            <a href="">InformePracticas_Ejemplo.pdf</a>
            <a href="">ResumenPracticas_Ejemplo.pdf</a>
            <a href="">ListasOficiales_Ejemplo.pdf</a>
            <a href="">Oficio_Ejemplo.pdf</a>
        </div>
    </div>
</section>
@endsection