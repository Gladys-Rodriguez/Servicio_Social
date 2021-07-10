@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno3')


@section('title', 'Ver Solicitud')

@section('content')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo2.css')}}">



  <div class="container" id="tabla">
  <h2>Seguimiento de mi solicitud</h2>          
  <div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del archivo</th>
      <th scope="col">Estado</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Ver</th>
    </tr>
  </thead>
  <tbody>
    @foreach($files as $file)
    <tr>
      <th scope="row">{{ $file->id }}</th>
      <td>{{ $file->nombre_doc }}</td>
      <td>{{ $file->estado ? 'Aceptado': 'Sin Validar'}}</td>
      <td>{{ $file->tipo_doc}}</td>
      <td>{{ $file->observaciones}}</td>

      <td>
        <a target="_blank" href="storage/public/{{ Auth::id() }}/{{ $file->nombre_doc }}" class="btn "> Ver el documento</a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>

@endsection