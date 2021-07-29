@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno4')


@section('title', 'Ver Solicitud')

@section('content')

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/docs_seguimiento.css')}}">




  <h2>Seguimiento de mi solicitud</h2>
  <button type="button" class="seguimiento">
    <a href="{{ route('docexpediente') }}">
        <span class="material-icons">cloud_upload</span>
        Subir Documento </a></button>



  <table class="register">
  <thead>
    <tr>
      <th><h1 class="h1">Nombre del archivo</h1></th>
      <th><h1>Estado</h1></th>
      <th><h1>Tipo de Documento</h1></th>
      <th><h1>Observaciones</h1></th>
      <th><h1>Ver</h1></th>
    </tr>
  </thead>
  <tbody>
    @foreach($files as $file)
    <tr>

      <td>{{ $file->nombre_doc }}</td>
      <td>{{ $file->estado ? 'Aceptado': 'Sin Validar'}}</td>
      <td>{{ $file->tipo_doc}}</td>
      <td>{{ $file->observaciones}}</td>

      <td>
        <a target="_blank" href="storage/{{ Auth::id() }}/{{ $file->nombre_doc }}" class="btn "> Ver el documento</a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>


@endsection
