@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Reportes')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Reportes.css')}}">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')
<h2> Concentrado de Inicios </h2>
    <form method="POST" action="{{ route('uploadConcentradoInicios.store') }}" enctype="multipart/form-data">
    @csrf

    </form>
    <button type="button" class="btn btn1"><a href="{{ route('docsConcentradoInicios.index') }}"> Ver Archivos Concentrado de Inicios</a></button>


<div class="block-pad btn-hover">
    <a href="#">Hover Button!</a>
  </div>
@endsection
