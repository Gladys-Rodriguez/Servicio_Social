@extends('Pantallas_Principales.navbarconsultaBannerInicio')

@section('title', 'Consulta Banner Home')

@section('css')
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />

<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/consultaBannerServicio.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<br>
<div class="container-fluid bg-dark py-5" >

<h1>Imagenes de home</h1>

<div class="table-responsive">

<div class="table-responsive">
        <table class="registro">
        <thead>
          <tr>
          <th><h1><span class="material-icons">drive_file_rename_outline</span> ID IMAGEN</h1></th>
            <th><h1><span class="material-icons">preview</span> IMAGEN</h1></th>
            <th><h1 class="h1"></th>
         </tr>
         </thead>
         <tbody>
         @foreach($bannerInicio as $bannerInicioo)
          <tr>

            <td>{{$bannerInicioo->id}}</td>

            <td><img src="img/carrusel/{{$bannerInicioo->ruta}}"/></td>
            <td class="btn">
                <a class="verificar" href="/EditarFormBannerInicio/{{$bannerInicioo->id}}">Editar</a>
            </td>

          </tr>
          @endforeach
        </tbody>
        </table>
    </div>
     </div>
</div>

@endsection
