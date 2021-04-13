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
    <form method="" action="" enctype="multipart/form-data">
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple>
        
        <button type="submit" class="btn btn1" > subir</button>
        </div>
    </form>

    <h2> Concentrado de Liberaciones Solicitadas  </h2>
    <form method="" action="" enctype="multipart/form-data">
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple>
        
        <button type="submit" class="btn btn1" > subir</button>
        </div>
    </form>


    <h2> Informes POA  </h2>
    <form method="" action="" enctype="multipart/form-data">
     <div class="container" >
        <input type="file" class="upload-box" name="files[]"  multiple>
        <button type="submit" class="btn btn1" > subir</button>
        </div>






    </body>
    </html>
@endsection