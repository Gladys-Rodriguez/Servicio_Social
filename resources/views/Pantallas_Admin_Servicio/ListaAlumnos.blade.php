<!--@extends('Pantallas_Admin_Servicio.navbarAdminServicio') -->

@section('title', 'LOGIN')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/ListaAlumnos.css')}}">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')

<h1><span class="blue"></span><span class="blue"></span> <span class="yellow"></span></h1>
    <h2>Listado <a  target="_blank">de Alumnos</a> <br>
    Inscritos al <a  target="_blank">Servicio Social</a></h2>

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
    <table class="container">
        <thead>
            <tr>
                <th><h1>Matricula </h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Apellido Paterno</h1></th>
                <th><h1>Apellido Materno</h1></th>
                <th><h1>Carrera</h1></th>
                <th><h1>Estado </h1></th>
            </tr>
        </thead>
        <tbody>

        @foreach ($busqueda as $busque )
                            <tr>
                                <td class="matricula">{{$busque->id_usuarios}}</td>
                                <td>{{$busque->nombre}}</td>
                                <td>{{$busque->ap_paterno}}</td>
                                <td>{{$busque->ap_materno}}</td>
                                <td>{{$busque->carrera}}</td>
                                <td>---------</td>
                            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
