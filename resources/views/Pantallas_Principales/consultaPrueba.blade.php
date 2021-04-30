@extends('Pantallas_Principales.navbarconsultaPrueba')

@section('title', 'ConsultaPrueba')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/consultaPrueba.css')}}">
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
                 <td>Boleta</td>
                 <td>Nombre</td>
                 <td>Correo</td>
            </tr>
               @foreach($Users as $User)
               <tr>
                 <td>{{$User->id}}</td>
                 <td>{{$User->name}}</td>
                 <td>{{$User->email}}</td>
                <tr>
               @endforeach
        </table>
    </div>

     </div>
</div>
@endsection
