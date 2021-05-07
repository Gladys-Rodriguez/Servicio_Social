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
        <h3 class="title">"Todos los usuarios"</h3>
      </div>

    <div class="tabla-consulta">
         <table border="1">
             <tr>
                 <td></td>
                 <td>Boleta</td>
                 <td>Nombre</td>
                 <td>Correo</td>
                 <td>Id_rol</td>
                 <td>Tipo de Rol</td>
            </tr>
               @foreach($Users as $User)
               <tr>
                 <td>
                 <a class="boton_personalizado" href="{{url('showPrueba', $User->id)}}">Ver</a>
                 <td>{{$User->id}}</td>
                 <td>{{$User->name}}</td>
                 <td>{{$User->email}}</td>
                 <td>{{$User->id_rol}}</td>
                 <td>{{$User->Tipo_rol}}</td>
                <tr>
               @endforeach
        </table>
    </div>

     </div>
</div>
@endsection
