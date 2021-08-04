@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Consulta Banner Servicio Inhabilitadas')

@section('css')
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />

<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/consultaBannerServicio.css')}}">
@endsection

@section('content')
<br>
<div class="container-fluid  py-5" >

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
</div>
@endsection
