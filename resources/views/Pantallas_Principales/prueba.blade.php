
@extends('Pantallas_Principales.navbarPrueba')

@section('title', 'Prueba')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/prueba.css')}}">
@endsection

@section('content')
<br>
<div class="container" overflow= scroll>
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Prueba login"</h3>
      </div>

    <div class="tabla-consulta">
    <table border="1">
             <tr>
                 <td></td>
                 <td>Boleta</td>

                 <td>Correo</td>
            </tr>
               <tr>
                 <td>
                 <a class="boton_personalizado" href="/pruebaEditarForm/{{Auth::user()->id}}">Editar</a>
                 <td>{{Auth::user()->id}}</td>
                 <td>{{Auth::user()->email}}</td>

                <tr>
        </table>
        </table>
    </div>

     </div>
</div>
@endsection
