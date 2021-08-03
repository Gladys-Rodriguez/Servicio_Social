@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Listado de Alumnos')

@section('css')
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/ListaAlumnos.css')}}">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid py-5" >
<h1><span class="blue"></span><span class="blue"></span> <span class="yellow"></span></h1>
<h2><span class="rosa">Listado </span>de Alumnos</a> <br>
    <span class="rosa">Inscritos al </span>Servicio Social</a></h2>

    <div class="box">
        <div class="container-1">
            <form action="{{route('ListaDeAlumnos.index')}}" method="GET">
            <span class="icon" ><i class="fa fa-search"></i></span>
            <input type="search" id="search" placeholder="Search..." name="search" value="{{$search}}"/>

           <!-- <input type="submit" value="Buscar">-->
            </form>
        </div>
      </div>

      <br>
      <br>
      <br>
      <div class="table-responsive">
    <table class="container">
        <thead>
            <tr>
                <th><h1>Matricula </h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Apellido Paterno</h1></th>
                <th><h1>Apellido Materno</h1></th>
                <th><h1>Carrera</h1></th>
                <th><h1>Estado </h1></th>
                <th><h1>Cambiar estado </h1></th>
            </tr>
        </thead>
        <tbody>

        @foreach ($busqueda as $busque )
                            <tr>
                                <td class="matricula" name="boleta">
                                    <form action="{{route('DatosServicio.index', $busque->id_usuarios)}}" method="GET">
                                    <button type="submit" id="boleta" placeholder="" name="boleta" value="{{$busque->id_usuarios}}">
                                        {{$busque->id_usuarios}}
                                    </button>



                                    </form>
                                    </td>
                                <td>{{$busque->nombre}}</td>
                                <td>{{$busque->ap_paterno}}</td>
                                <td>{{$busque->ap_materno}}</td>
                                <td>{{$busque->carrera}}</td>
                                <td>{{$busque->status_ss  ? 'Aceptado': 'Sin Validar'}}</td>
                                <td><a class="boton_personalizado" href="/EditarEstadoAlumno/{{$busque->id_usuarios}}">Habilitar/deshabilitar</a></td>
                            </tr>
        @endforeach

        </tbody>
    </table>
      </div>
</div>
@endsection
