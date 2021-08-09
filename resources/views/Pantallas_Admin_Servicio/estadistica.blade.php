@extends('Pantallas_Admin_Servicio.navbarAdminServicio')
@section('content')
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width,initial-scale=1.0">
        <title> Index Admin </title>
        <link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo1.css')}}">
    <body>



    <h2> Acta de Nacimiento </h2>
    <form method="POST" action="{{ route('uploadEstadisticaMensual.store') }}" enctype="multipart/form-data">
    @csrf
     <div class="container" >

        <input type="file" class="upload-box" name="files[]"  multiple>

        <button type="submit" class="btn btn1" > subir</button>
        </div>
    </form>



    <h2> Informe Mensual </h2>
    <form method="POST" action="{{ route('uploadEstadisticaMensual.store') }}" enctype="multipart/form-data">
    @csrf
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple>

        <button type="submit" class="btn btn1" > subir</button>
        </div>
    </form>

    <button type="button" class="btn btn1"><a href="{{ route('docsEstadisticaMensual.index') }}"> Ver Estadistica Informe Mensual</a></button>

    <h2> Informe Trimestral  </h2>
    <form method="POST" action="{{ route('uploadEstadisticaTrimestral.store') }}" enctype="multipart/form-data">
    @csrf
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple>

        <button type="submit" class="btn btn1" > subir</button>
        </div>
    </form>
    <button type="button" class="btn btn1"><a href="{{ route('docsEstadisticaTrimestral.index') }}"> Ver Estadistica Informe Mensual</a></button>


    <h2> Informes POA  </h2>
    <form method="" action="" enctype="multipart/form-data">
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple>
        <button type="submit" class="btn btn1" > subir</button>
        </div>
        <form action="{{url('/docs_estadistica_poa')}}">
        <button type="submit" class="btn btn1"> Ver Documentos POA Estadistica</button>
        </form>






    </body>
    </html>
@endsection
