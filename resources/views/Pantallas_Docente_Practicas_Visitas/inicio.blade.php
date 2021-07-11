@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Bienvenido a Prácticas y Visitas Escolares
    <br> Usuario con matricula: {{ Auth::user()->id}}</h1>
</section>

<section class="section-inicio">
    <section class="calendario-visitas">
        <h2>Calendario</h2>
    </section>

    <section class="plantillas-doc">
        <h2>Documentos-Plantillas</h2>
    </section>

    <section class="ejemplos-doc">
        <h2>Documentos-Ejemplos</h2>
    </section>
</section>

@endsection
