@extends('layouts.navbarAdminIndex2')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo3.css')}}">

  <form method="GET" action="{{ route('alumno.lista') }}" >
    <div class="buscar">
        <input type="text" placeholder="Buscar" name="search">
        <div class="btn" id="buscador" >
        <button type="submit">
            <i class="bi bi-search"></i>
        </div></button>
    </div>
    </form>

  <div class="container " id="tabla">
  <div class="container" id="main-container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del alumno</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">No. Boleta</th>
      <th scope="col">Carrera</th>
      <th scope="col">Semestre</th>
      <th scope="col">Servicio Social</th>
    </tr>
  </thead>
  <tbody>
  @if(count($alumnos)<=0)
    <tr>
      <td colspan="8">No hay resultados</td>
    </tr>
  @else
    @foreach($alumnos as $alumno)
    <tr>
      
      <td>{{ $alumno->datos->nombre }}</td>
      <td>{{ $alumno->datos->ap_paterno }}</td>
      <td>{{ $alumno->datos->ap_materno }}</td>
      <td>{{ $alumno->id }}</td>
      <td>{{ $alumno->carrera }}</td>
      <td>{{ $alumno->semestre }}</td>
      <td>{{ $alumno->servicio ? 'Finalizado': 'En proceso'}}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
  </table>
  </div>
  </div>
  





@endsection