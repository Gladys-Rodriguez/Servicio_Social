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
                <td width=10%>#</td>
                <td width=10%>id_alumnos</td>
                <td width=10%>carrera</td>
                <td width=10%>semestre</td>
                <td width=10%>grupo</td>
                <td width=10%>turno</td>
                <td width=10%>id_datos</td>
                <td width=10%>id_usuarios</td>
                <td width=10%>id_direccions</td>
                <td width=10%>Matricula</td>
                <td width=10%>Correo</td>
            </tr>

        @foreach ($alumnos as $alumno)
        @foreach ($users as $user)


        <tr>
            <td align="center">{{$loop->iteration}}</td>
            <td align="center">{{$alumno-> id_alumnos}}</td>
            <td align="center">{{$alumno-> carrera}}</td>
            <td align="center">{{$alumno-> semestre}}</td>
            <td align="center">{{$alumno-> grupo}}</td>
            <td align="center">{{$alumno-> turno}}</td>
            <td align="center">{{$alumno-> id_datos}}</td>
            <td align="center">{{$alumno-> id_usuarios}}</td>
            <td align="center">{{$alumno-> id_direccions}}</td>
            <td align="center">{{$user-> id}}</td>
            <td align="center">{{$user-> email}}</td>

        </tr>

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
