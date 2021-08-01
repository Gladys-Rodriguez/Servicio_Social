@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno4')

@section('title', 'Subir Reportes')

@section('content')

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/docs_reportes.css')}}">

  <!--<button type="button" class="seguimiento">
    <a href="#">
        <span class="material-icons">preview</span>
        Ver el seguimiento de mi solicitud </a></button> -->

  <h1 class="titulo">Carga de Reportes <a  target="_blank"> Mensual</a> </h1>


<table class="register">
    <form method="POST" action="{{ route('uploadreporte.store') }}" enctype="multipart/form-data">
        @csrf
    <thead>
        <tr>
            <th><h1><span class="material-icons">manage_search</span> Archivo</h1></th>
                <td>
                    <div class="container-input">
                        <input type="file" name="files[]" id="file-7" class="inputfile inputfile-2" multiple />
                        <label for="file-7">
                        <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                        <span class="iborrainputfile">Seleccionar archivo</span>
                        </label>
                        </div>
                </td>
        </tr>
        <tr>
            <th><h1><span class="material-icons">event</span>Periodo de Reporte</h1></th>
                <td>
                    <select class="select" name="documento" >
                        <option>Seleccione Periodo</option>
                        <option value="PERIODO 1">PERIODO 1</option>
                        <option value="PERIODO 2">PERIODO 2</option>
                        <option value="PERIODO 3">PERIODO 3</option>
                        <option value="PERIODO 4">PERIODO 4</option>
                        <option value="PERIODO 5">PERIODO 5</option>
                        <option value="PERIODO 6">PERIODO 6</option>
                        <option value="PERIODO 7">PERIODO 7</option>
                </td>
        </tr>
        <tr>
            <th><h1><span class="material-icons">cloud_upload</span> Subir Reporte </h1></th>
            <td>
                <button type="submit" class="btn btn1" >
                <span class="material-icons">file_upload</span>Subir Reporte</button>
            </td>
        </tr>


    </thead>
    </form>
</table>

<button type="button" class="seguimiento">
    <a href="{{ route('SeguimientoReportes.index') }}">
        <span class="material-icons">preview</span>
        Ver la validación de mis reportes</a></button>
@endsection

@section('script')
<script src="{{asset('js/Pantallas_Alumno_Servicio/docs.js')}}"></script>


@endsection
