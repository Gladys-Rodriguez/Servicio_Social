@extends('layouts.navbarAdminIndex2')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo1.css')}}">
<body>

<div class="container" id="tabla">
  <h2>Archivos concentrado de inicios</h2>          
  <div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del archivo</th>
      <th scope="col">Ver</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($files as $file)
    <tr>
    <th scope="row"></th>
      <td>{{ $file->nombre }}</td>
      <td>
        <a target="_blank" href="storage/public/{{ Auth::id() }}/{{ $file->nombre }}" class="btn  "> Ver</a>
      </td>
      <td>
      <a href="storage/app/public/{{ $file->nombre }}" class="btn btn-sm btn-outline-danger"> Eliminar </a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>



@endsection