@extends('Pantallas_Principales.navbarshowPrueba')

@section('title', 'SHOW PRUEBA')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/showPrueba.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Datos generales"</h3>
        <p class="text">
          Bienvenido
        </p>
      </div>

      <div class="tabla-consulta">
                 <td>{{$Users->id}}</td>
                 <td>{{$Users->name}}</td>
     </div>


</div>
@endsection
