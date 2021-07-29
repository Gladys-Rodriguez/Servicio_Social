@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Registro De Fechas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/registrofechas.css')}}">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')
<h1><span class="blue"></span><span class="blue"></span> <span class="yellow"></span></h1>
    <h1>Registro de Fechas para el Servicio Social <br>
    Alumno con Boleta: <span class="naranja">{{$boleta}}</span> </h1>



      <br>
      <br>

    <table class="container">
        <thead>
            <tr>
                <th><h1>Nombre del alumno</h1></th>
                <th><h1>Carrera</h1></th>
                <th><h1>Estado del Registro </h1></th>
                <th><h1>Nombre de la dependencia</h1></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($busqueda as $busque )
            @foreach($registro as $register)

                            <tr>
                                <td>{{$busque->nombre}} {{$busque->ap_paterno}} {{$busque->ap_materno}}</td>
                                <td>{{$busque->carrera}}</td>
                                <td>{{$register->status_ss ? 'Aceptado': 'Sin Validar'}}</td>
                                <td>{{$busque->nombre_depen}}</td>
                            </tr>
             @endforeach
                            @endforeach

        </tbody>
    </table>
    @foreach ($busqueda as $busque )
<form class="fechas" action="{{route('Registro de Fechas.update', $busque->id_servicios)}}" method="POST">
    @csrf
    @method('PUT')

    <table class="register">

        <thead>
            <tr>
                <th><h1>No De Registro</h1></th>
                    <td><input type="text" class="caja" name="No_registro" id="No_registro" value="{{$busque->No_registro}}"></td>
            </tr>
            <tr>
                <th><h1>Fecha de Inicio</h1></th>
                    <td><input type="date" class="caja" name="fecha_inicio" id="fecha_inicio" value="{{$busque->fecha_inicio}}"></td>
            </tr>
            <tr>
                <th><h1>Fehca de Termino </h1></th>
                <td><input type="date" class="caja" name="fecha_termino" id="fecha_termino" value="{{$busque->fecha_termino}}"></td>
            </tr>
            <tr>
                <th><h1>Fecha de Inscripcion</h1></th>
                    <td><input type="date" class="caja" name="fecha_inscripcion" id="fecha_inscripcion" value="{{$busque->fecha_inscripcion}}"></td>
            </tr>

        </thead>

    </table>
    <br>
    <button type="submit" class="submit" >Actualizar  Fechas</button>
    @endforeach
    </form>

    @foreach ($busqueda as $busque )
    <a  class="regresar" href="{{route('DatosServicio.index', $busque->id_usuarios)}}"> Regresar </a>
    @endforeach
@endsection

@section('script')


@endsection
