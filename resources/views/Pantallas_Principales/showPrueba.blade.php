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
               <tr>
                 <td>
                 <a class="boton_personalizado" href="/pruebaEditarForm/{{$Users->id}}">Editar</a>
                 <td>{{$Users->id}}</td>
                 <td>{{$Users->email}}</td>

                 <td>{{$Users->nombre}}</td>
                 <td>{{$Users->ap_paterno}}</td>
                 <td>{{$Users->ap_materno}}</td>
                 <td>{{$Users->telefono}}</td>
                 <td>{{$Users->celular}}</td>

                 <td>{{$Users->ciudad}}</td>
                 <td>{{$Users->alcaldia}}</td>
                 <td>{{$Users->colonia}}</td>
                 <td>{{$Users->calle}}</td>
                 <td>{{$Users->num_ext}}</td>
                 <td>{{$Users->num_int}}</td>
                 <td>{{$Users->cp}}</td>

                 <td>{{$Users->carrera}}</td>
                 <td>{{$Users->semestre}}</td>
                 <td>{{$Users->grupo}}</td>
                 <td>{{$Users->turno}}</td>

                <tr>
        </table>
    </div>


</div>
@endsection
