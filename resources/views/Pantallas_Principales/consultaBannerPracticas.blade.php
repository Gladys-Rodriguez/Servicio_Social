@extends('Pantallas_Principales.navbarconsultaBannerPracticas')

@section('title', 'Consulta Banner Prácticas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/consultaBannerPracticas.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Imagenes de prácticas"</h3>
      </div>

    <div class="tabla-consulta">
         <table border="1">
             <tr>
                 <td></td>
                 <td>Id imagen</td>
                 <td>Imagen</td>

            </tr>
               @foreach($bannerPracticas as $bannerPracticass)
               <tr>
                 <td>
                 <?php /*<a class="boton_personalizado" href="{{url('showPrueba', $bannerServicio->id)}}">Ver</a> */ ?>
                 <a class="boton_personalizado" href="/EditarFormBannerPracticas/{{$bannerPracticass->id}}">Editar</a>
                 <td>{{$bannerPracticass->id}}</td>
                 <td><img src="img/carrusel/{{$bannerPracticass->ruta}}" width="150"/></td>

                <tr>
               @endforeach
        </table>
    </div>

     </div>
</div>
@endsection
