
@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno3')


@section('title', 'Subir Documentos')

@section('content')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo2.css')}}">

  <button type="button" class="btn btn1"><a href="{{ route('uploaddocexpediente.index') }}"> Ver el seguimiento de mi solicitud </a></button>
  
  <div class="container" id="tabla">
  <h2>  Acta de nacimiento</h2>
  <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
    @csrf
  <table class="table">
  <thead>
    <tr >
      <th scope="col"> <i class="bi bi-archive-fill"></i> Archivo</th> 
      <th scope="col"> <i class="bi bi-file-earmark-pdf"></i> Tipo de Documento</th>
      <th scope="col"> <i class="bi bi-capslock-fill"></i> Subir Archivo </th>
      <th scope="col"> <i class="bi bi-patch-exclamation-fill"></i> Observaciones </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="file"   name="files[]"  multiple></td>
      <td><select  class ="select" name="documento">
        <option value="Acta de Nacimiento">Acta de nacimiento</option>
        </select></td>
      <td><button type="submit" class="btn btn1" > subir</button> </td>
    </tr>
  </tbody>
</table>
</form>
</div>


<div class="container" id="tabla">
  <h2> CURP </h2>
  <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
    @csrf
  <table class="table">
  <thead>
    <tr >
      <th scope="col"> <i class="bi bi-archive-fill"></i> Archivo</th> 
      <th scope="col"> <i class="bi bi-file-earmark-pdf"></i> Tipo de Documento</th>
      <th scope="col"> <i class="bi bi-capslock-fill"></i> Subir Archivo </th>
      <th scope="col"> <i class="bi bi-patch-exclamation-fill"></i> Observaciones </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="file"   name="files[]"  multiple></td>
      <td><select  class ="select" name="documento">
        <option value="CURP"> CURP </option>
        </select></td>
      <td><button type="submit" class="btn btn1" > subir</button> </td>
    </tr>
  </tbody>
</table>
</form>
</div>

<div class="container" id="tabla">
  <h2> No. IMSS </h2>
  <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
    @csrf
  <table class="table">
  <thead>
    <tr >
      <th scope="col"> <i class="bi bi-archive-fill"></i> Archivo</th> 
      <th scope="col"> <i class="bi bi-file-earmark-pdf"></i> Tipo de Documento</th>
      <th scope="col"> <i class="bi bi-capslock-fill"></i> Subir Archivo </th>
      <th scope="col"> <i class="bi bi-patch-exclamation-fill"></i> Observaciones </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="file"   name="files[]"  multiple></td>
      <td><select  class ="select" name="documento">
        <option value="No. IMSS">No. IMSS</option>
        </select></td>
      <td><button type="submit" class="btn btn1" > subir</button> </td>
    </tr>
  </tbody>
</table>
</form>
</div>


<div class="container" id="tabla">
  <h2> Dictamen </h2>
  <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
    @csrf
  <table class="table">
  <thead>
    <tr >
      <th scope="col"> <i class="bi bi-archive-fill"></i> Archivo</th> 
      <th scope="col"> <i class="bi bi-file-earmark-pdf"></i> Tipo de Documento</th>
      <th scope="col"> <i class="bi bi-capslock-fill"></i> Subir Archivo </th>
      <th scope="col"> <i class="bi bi-patch-exclamation-fill"></i> Observaciones </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="file"   name="files[]"  multiple></td>
      <td><select  class ="select" name="documento">
        <option value="Dictamen"> Dictamen</option>
        </select></td>
      <td><button type="submit" class="btn btn1" > subir</button> </td>
    </tr>
  </tbody>
</table>
</form>
</div>

<div class="container" id="tabla">
  <h2> Constancia Escuela  </h2>
  <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
    @csrf
  <table class="table">
  <thead>
    <tr >
      <th scope="col"> <i class="bi bi-archive-fill"></i> Archivo</th> 
      <th scope="col"> <i class="bi bi-file-earmark-pdf"></i> Tipo de Documento</th>
      <th scope="col"> <i class="bi bi-capslock-fill"></i> Subir Archivo </th>
      <th scope="col"> <i class="bi bi-patch-exclamation-fill"></i> Observaciones </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="file"   name="files[]"  multiple></td>
      <td><select  class ="select" name="documento">
        <option value="Constancia Escuela">Constancia Escuela</option>
        </select></td>
      <td><button type="submit" class="btn btn1" > subir</button> </td>
    </tr>
  </tbody>
</table>
</form>
</div>


<div class="container" id="tabla">
  <h2> Carta Compromiso  </h2>
  <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
    @csrf
  <table class="table">
  <thead>
    <tr >
      <th scope="col"> <i class="bi bi-archive-fill"></i> Archivo</th> 
      <th scope="col"> <i class="bi bi-file-earmark-pdf"></i> Tipo de Documento</th>
      <th scope="col"> <i class="bi bi-capslock-fill"></i> Subir Archivo </th>
      <th scope="col"> <i class="bi bi-patch-exclamation-fill"></i> Observaciones </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="file"   name="files[]"  multiple></td>
      <td><select  class ="select" name="documento">
        <option value="Carta Compromiso">Carta Compromiso</option>
        </select></td>
      <td><button type="submit" class="btn btn1" > subir</button> </td>
    </tr>
  </tbody>
</table>
</form>
</div>



@endsection

