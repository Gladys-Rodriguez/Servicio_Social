@extends('Pantallas_Principales.navbarconsultaBannerInicioInhabilitadas')

@section('title', 'Consulta Banner Home Inhabilitadas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/consultaBannerInicio.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Imagenes de home inhabilitadas"</h3>
      </div>

    <div class="tabla-consulta">
         <table border="1">
             <tr>
                 <td></td>
                 <td>Id imagen</td>
                 <td>Imagen</td>

            </tr>
               @foreach($bannerInicio as $bannerInicioo)
               <tr>
                 <td>
                 <?php /*<a class="boton_personalizado" href="{{url('showPrueba', $bannerServicio->id)}}">Ver</a> */ ?>
                 <a class="boton_personalizado" href="/EditarFormBannerInicio/{{$bannerInicioo->id}}">Editar</a>
                 <td>{{$bannerInicioo->id}}</td>
                 <td><img src="img/carrusel/{{$bannerInicioo->ruta}}" width="150"/></td>

                <tr>
               @endforeach
        </table>
    </div>

     </div>
</div>
@endsection
