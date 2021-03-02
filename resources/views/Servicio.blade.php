@extends('layouts.layout')

@section('title', 'Servicio')

@section('content')
<!-- Aquí va contenido -->
<link href="{{asset('css/Servicio_estilos.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <h3></h3>
<aside>
    <a href="">Datos Generales</a>
    <a href="">Datos de Servicio</a>
    <a href="">Subir Reportes</a>
    <a href="">Salir de la Sesion</a>
</aside>
<section>
    <div class="content-wrap">
        <h2>Datos Generales</h2>
        <img src="img/default_perfil.png">
        <p><b>Nombre:</b> Moises Erick Gonzalez Hernandez</p>
        <p><b>No. de Boleta:</b> 2014050000</p>
        <p><b>Carrera:</b> Técnico en Informática</p>
        <p><b>Semestre:</b> 6to</p>
        <p><b>Turno:</b> Vespertino</p>
        <p><b>Grupo:</b> 6NM10</p>
    </div>
</section>
@endsection
