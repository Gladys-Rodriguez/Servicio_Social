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
        <table border="1">
             <tr>
                 <td></td>
                 <td>Boleta</td>
                 <td>Nombre</td>
                 <td>Correo</td>
            </tr>
               <tr>
                 <td>
                 <a class="boton_personalizado" href="/pruebaEditarForm/{{$Users->id}}">Editar</a>
                 <td>{{$Users->id}}</td>
                 <td>{{$Users->name}}</td>
                 <td>{{$Users->email}}</td>

                <tr>
        </table>
    </div>


</div>
@endsection
