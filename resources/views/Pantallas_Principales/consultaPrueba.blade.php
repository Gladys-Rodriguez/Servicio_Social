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
        <h3 class="title">"Todos los alumnos"</h3>
      </div>

    <div class="tabla-consulta">
         <table border="1">
             <tr>
                 <td></td>
                 <td>Matricula</td>
                 <td>Correo</td>

                 <td>Nombre</td>
                 <td>Apellido paterno</td>
                 <td>Apellido materno</td>
                 <td>Telefono</td>
                 <td>Celular</td>

                 <td>Ciudad</td>
                 <td>Alcaldia</td>
                 <td>Colonia</td>
                 <td>Calle</td>
                 <td>Numero ext</td>
                 <td>Numero int</td>
                 <td>Codigo postal</td>

                 <td>Carrera</td>
                 <td>Semestre</td>
                 <td>Grupo</td>
                 <td>Turno</td>

            </tr>
               @foreach($Users as $User)
               <tr>
                 <td>
                 <a class="boton_personalizado" href="{{url('showPrueba', $User->id)}}">Ver</a>
                 <td>{{$User->id}}</td>
                 <td>{{$User->email}}</td>

                 <td>{{$User->nombre}}</td>
                 <td>{{$User->ap_paterno}}</td>
                 <td>{{$User->ap_materno}}</td>
                 <td>{{$User->telefono}}</td>
                 <td>{{$User->celular}}</td>

                 <td>{{$User->ciudad}}</td>
                 <td>{{$User->alcaldia}}</td>
                 <td>{{$User->colonia}}</td>
                 <td>{{$User->calle}}</td>
                 <td>{{$User->num_ext}}</td>
                 <td>{{$User->num_int}}</td>
                 <td>{{$User->cp}}</td>

                 <td>{{$User->carrera}}</td>
                 <td>{{$User->semestre}}</td>
                 <td>{{$User->grupo}}</td>
                 <td>{{$User->turno}}</td>
                <tr>
               @endforeach
        </table>
    </div>

     </div>
</div>
@endsection
