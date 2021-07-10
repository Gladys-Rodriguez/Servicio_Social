@extends('layouts.navbarAdminIndex2')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo4.css')}}">

<form method="POST" action="{{ route('uploaddocexpediente.update',$files->id) }}" enctype="multipart/form-data">
    @csrf
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
      <th scope="col">Enviar</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">{{ $files->id }}</th>
      <td>{{ $files->nombre_doc }}</td>
      <td><select class="select" name="estado" value="{{ $files->estado}}"  >
      <option value="0"> Sin validar</option>
      <option value="1"> Aceptado</option>
       
       </td>
      <td>{{ $files->tipo_doc}}</td>
      <td><input type="textarea" name="observaciones" value="{{ $files->observaciones}}"></td>

      <td>
        <a target="_blank" href="/storage/public/{{ Auth::id() }}/{{ $files->nombre_doc }}" value="{{ $files->nombre_doc}}" class="btn btn-danger "> Ir al documento</a>
      </td>
      <td>
        <button type="submit" class="btn btn1" > Enviar</button>
      </td>
    </tr>
    
  </tbody>
  </table>
</div>
</div>
  
</form>
@endsection