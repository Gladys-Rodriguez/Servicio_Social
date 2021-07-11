@extends('Pantallas_Principales.navbarconsultaUsuarios')

@section('title', 'ConsultaPrueba')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/consultaUsuarios.css')}}">
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
                 <td>Matricula</td>
                 <td>Correo</td>
                 <td>Rol</td>



            </tr>
               @foreach($Users as $User)
               <tr>
                 <td>
                 <a class="boton_personalizado" href="{{url('showPrueba', $User->id)}}">Ver</a>
                 <td>{{$User->id}}</td>
                 <td>{{$User->email}}</td>
                 <td>{{$User->id_rol}}</td>


                <tr>
               @endforeach
        </table>
    </div>

     </div>
</div>
@endsection
