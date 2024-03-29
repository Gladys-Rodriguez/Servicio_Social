@extends('Pantallas_Principales.navbarIndex_gnral')

@section('title', 'Index General')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/Index_gnral.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"CECyT 13 "Ricardo Flores Magón"</h3>
        <p class="text">
          Bienvenido
        </p>
      </div>
    <!--Inicioo carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
        @forelse($bannerInicio as $bannerInicioo)
        <div class="carousel-item @if ($loop->index==0) active @endif">
            <img class="d-block w-100" src="img/carrusel/{{$bannerInicioo->ruta}}" alt="First slide">
        </div>
        @empty

        @endforelse

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>

        </a>
    </div>
    <!--Fin carrusel-->

     </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



@endsection
