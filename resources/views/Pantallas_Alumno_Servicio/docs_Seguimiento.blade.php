@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno4')


@section('title', 'Ver Solicitud')

@section('content')

<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/docs_seguimiento.css')}}">


  <div class="container-fluid bg-dark py-5" >

  <h2>Seguimiento de mi solicitud</h2>
  <button type="button" class="seguimiento">
    <a href="{{ route('docexpediente') }}">
        <span class="material-icons">cloud_upload</span>
        Subir Documento </a></button>


        <div class="table-responsive">
  <table class="register">
  <thead>
    <tr>
      <th><h1 class="h1"><span class="material-icons">description</span>Nombre del archivo</h1></th>
      <th class="status"><h1><span class="material-icons">edit_attributes</span>Estado</h1></th>
      <th><h1><span class="material-icons">drive_file_rename_outline</span>Tipo de Documento</h1></th>
      <th><h1><span class="material-icons">notifications_active</span>Observaciones</h1></th>
      <th><h1><span class="material-icons">preview</span> Ver</h1></th>
      <th><h1><span class="material-icons">delete_forever</span>Eliminar</h1></th>

    </tr>
  </thead>
  <tbody>
    @foreach($files as $file)
    <tr>

      <td>{{ $file->nombre_doc }}</td>
      <td>{{ $file->estado ? 'Aceptado': 'Sin Validar'}}</td>
      <td>{{ $file->tipo_doc}}</td>
      <td>{{ $file->observaciones}}</td>

      <td class="btn">
        <a target="_blank" href="storage/{{ Auth::id() }}/{{ $file->nombre_doc }}" class="verificar "> Ver el documento</a>
      </td>
      <td><form action="{{ route('eliminarDocsAlumno.destroy',$file->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="eliminar">
            <a> Eliminar</a>
        </button>
      </form></td>
    </tr>
    @endforeach
  </tbody>
  </table>
        </div>


        <h2>Control del Registro </span> </h2>
        <br>



            <div class="table-responsive">
            <table class="registro">
            <thead>
                <tr>
                    <th><h1><span class="material-icons">check_box</span> Estado del Proceso</h1></th>
                    <th><h1><span class="material-icons">date_range</span> Fecha de Envío</h1></th>
                    <th><h1><span class="material-icons">priority_high</span>Observaciones</h1></th>

                </tr>
            </thead>
            <tbody>


                @foreach ($alumno as $alum)
                                <tr>
                                    <td>
                                        Actualmente se encuentra: {{$alum->status_ss  ? 'Aceptado': 'Sin Validar'}}
                                        </td>
                                    <td>{{$alum->fecha_envio}}</td>
                                    <td>{{$alum->observaciones}}</td>

                                </tr>


@endforeach
            </tbody>
        </table>
        </div>







  </div>
@endsection
