@extends('Pantallas_Principales.navbarconsultaBannerServicioInhabilitadas')

@section('title', 'Consulta Banner Servicio Inhabilitadas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/consultaBannerServicio.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Imagenes de servicio inhabilitadas"</h3>
      </div>

    <div class="tabla-consulta">
         <table border="1">
             <tr>
                 <td></td>
                 <td>Id imagen</td>
                 <td>Imagen</td>

            </tr>
               @foreach($bannerServicio as $bannerServicioo)
               <tr>
                 <td>
                 <?php /*<a class="boton_personalizado" href="{{url('showPrueba', $bannerServicio->id)}}">Ver</a> */ ?>
                 <a class="boton_personalizado" href="/EditarFormBannerServicio/{{$bannerServicioo->id}}">Editar</a>
                 <td>{{$bannerServicioo->id}}</td>
                 <td><img src="img/carrusel/{{$bannerServicioo->ruta}}" width="150"/></td>

                <tr>
               @endforeach
        </table>
    </div>

     </div>
</div>
@endsection
