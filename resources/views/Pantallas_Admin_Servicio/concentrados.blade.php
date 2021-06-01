@extends('layouts.navbarAdminIndex2')
@section('content')
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width,initial-scale=1.0">
        <title> Index Admin </title>
        <link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo1.css')}}">
    <body>
       
    
    <h2> Concentrado de Inicios </h2>
    <form method="POST" action="{{ route('uploadConcentradoInicios.store') }}" enctype="multipart/form-data">
    @csrf
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple required="required">
        
        <button type="submit" class="btn btn1" > subir</button>
        
        </div>
    </form>
    <button type="button" class="btn btn1"><a href="{{ route('docsConcentradoInicios.index') }}"> Ver Archivos Concentrado de Inicios</a></button>
    

    <h2> Concentrado de Liberaciones Solicitadas  </h2>
    <form method="POST" action="{{ route('uploadConcentradoLiberaciones.store') }}" enctype="multipart/form-data">
    @csrf
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple>
        
        <button type="submit" class="btn btn1" > subir</button>
        </div>
    </form>

    <button type="button" class="btn btn1"><a href="{{ route('docsConcentradoLiberaciones.index') }}"> Ver Archivos Concentrado de Liberaciones</a></button>


    <h2> Informes POA  </h2>
    <form method="POST" action="{{ route('uploadConcentradoPOA.store') }}" enctype="multipart/form-data">
    @csrf
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple>
        <button type="submit" class="btn btn1" > subir</button>
        </div>
        
        <button type="button" class="btn btn1"><a href="{{ route('docsConcentradoPOA.index') }}"> Ver Archivos Concentrado POA </a></button>

    </body>
    </html>
@endsection