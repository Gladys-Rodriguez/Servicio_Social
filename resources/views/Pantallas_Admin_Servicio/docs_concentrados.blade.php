@extends('layouts.navbarAdminIndex2')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo1.css')}}">
<body>

<div class="container" id="tabla">
  <h2>Archivos concentrado de inicios</h2>          
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nombre del archivo</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Archivo de prueba 5</td>
        <td>
            <a href="{{asset('documents/admon.pdf')}}" target="_blank" class="btn btn-sm btn-outline-secondary" id="ver">
                Ver
            </a>
        </td>
        <td>
            <a href="" class="btn btn-sm btn-outline-danger" id="eliminar">
                Eliminar
            </a>
        </td>
      </tr>
      <tr>
        <td>Archivo de prueba 4</td>
        <td>
            <a href="{{asset('documents/admon.pdf')}}" target="_blank" class="btn btn-sm btn-outline-secondary" id="ver">
                Ver
            </a>
        </td>
        <td>
            <a href="" class="btn btn-sm btn-outline-danger" id="eliminar">
                Eliminar
            </a>
        </td>
      </tr>

      <tr>
        <td>Archivo de prueba 3</td>
        <td>
            <a href="{{asset('documents/admon.pdf')}}" target="_blank" class="btn btn-sm btn-outline-secondary" id="ver">
                Ver
            </a>
        </td>
        <td>
            <a href="" class="btn btn-sm btn-outline-danger" id="eliminar">
                Eliminar
            </a>
        </td>
      </tr>

      <tr>
        <td>Archivo de prueba 2</td>
        <td>
            <a href="{{asset('documents/admon.pdf')}}" target="_blank" class="btn btn-sm btn-outline-secondary" id="ver">
                Ver
            </a>
        </td>
        <td>
            <a href="" class="btn btn-sm btn-outline-danger" id="eliminar">
                Eliminar
            </a>
        </td>
      </tr>

      <tr>
        <td>Archivo de prueba 1</td>
        <td>
            <a href="{{asset('documents/admon.pdf')}}" target="_blank" class="btn btn-sm btn-outline-secondary" id="ver">
                Ver
            </a>
        </td>
        <td>
            <a href="" class="btn btn-sm btn-outline-danger" id="eliminar">
                Eliminar
            </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>



@endsection