@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_datosPersonalesA')

@section('title', 'Datos personales')

@section('css')


<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/datosPersonalesA.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Datos personales"</h3>
      </div>


 <div class="tabla-consulta">
         <table border="1">
             <tr>
             <td width=10%> </td>
                <td width=10%>#</td>
                <td width=10%>Nombre</td>
                <td width=10%>Apellido Paterno</td>
                <td width=10%>Apellido Materno</td>
                <td width=10%>Telefono</td>
                <td width=10%>Celular</td>
                <td width=10%>Ciudad</td>
                <td width=10%>Alcaldia</td>
                <td width=10%>Colonia</td>
                <td width=10%>Calle</td>
                <td width=10%>Numero exterior</td>
                <td width=10%>Numero interior</td>
                <td width=10%>Codigo postal</td>
                <td width=10%>Carrera</td>
                <td width=10%>Semestre</td>
                <td width=10%>Grupo</td>
                <td width=10%>Turno</td>
                <td width=10%>Matricula</td>
                <td width=10%>Correo</td>
            </tr>

        @foreach ($datos as $dato )
        @foreach ($direccions as $direccion)
        @foreach ($alumnos as $alumno)
        @foreach ($users as $user)
        <tr>
            <td><a class="boton_personalizado" href="/EditarAlumnoForm/{{$alumno->id_alumnos}}/{{$user->id}}">Editar</a></td>
            <td align="center">{{$loop->iteration}}</td>
            <td align="center">{{$dato-> nombre}}</td>
            <td align="center">{{$dato-> ap_paterno}}</td>
            <td align="center">{{$dato-> ap_materno}}</td>
            <td align="center">{{$dato-> telefono}}</td>
            <td align="center">{{$dato-> celular}}</td>
            <td align="center">{{$direccion-> ciudad}}</td>
            <td align="center">{{$direccion-> alcaldia}}</td>
            <td align="center">{{$direccion-> colonia}}</td>
            <td align="center">{{$direccion-> calle}}</td>
            <td align="center">{{$direccion-> num_ext}}</td>
            <td align="center">{{$direccion-> num_int}}</td>
            <td align="center">{{$direccion-> cp}}</td>
            <td align="center">{{$alumno-> carrera}}</td>
            <td align="center">{{$alumno-> semestre}}</td>
            <td align="center">{{$alumno-> grupo}}</td>
            <td align="center">{{$alumno-> turno}}</td>
            <td align="center">{{$user-> id}}</td>
            <td align="center">{{$user-> email}}</td>

        </tr>
        @endforeach
        @endforeach
        @endforeach
        @endforeach


</table>
</div>
 </div>
@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Principales/Index_Alumno.js')}}"></script>
@endsection
