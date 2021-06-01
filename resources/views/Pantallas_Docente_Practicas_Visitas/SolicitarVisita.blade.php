@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('title')
Solicitar Visita Escolar
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}">
@endsection



@section('content')

<section class="section-main">
    <h1>Solicitar Visita</h1>
    <form>
    </form>
</section>

<section class="section-dos">
    <h2>Solicitud de Visita o Práctica Escolar</h2>

    <form class="form" action="{{ route('DocenteVisitas.store') }}" method="POST" enctype="multipart/form-data">
        <div class="col">
            <label for="docente_id">ID DOCENTE: </label>
            <input type="text" name="docente_id" id="docente_id" value="1">

            <label>Profesor:</label>
            <input type="text" value="RODRIGUEZ PEREZ MANUEL" readonly>

            <label>Número ALumnos: </label>
            <input type="number" min=0 max=100 value="40">

            <label for="Carrera">Grupo:</label>
            <select name="carrera" id="Carrera">
                <option value="informatica">1NM10</option>
                <option value="contabilidad">1NV10</option>
                <option value="turismo">1AM14</option>
                <option value="turismo">1AV14</option>
                <option value="turismo">1TM12</option>
                <option value="turismo">1TV12</option>
            </select>

            <label for="fecha_visita">FECHA VISITA: </label>
            <input type="date" name="fecha_visita" id="fecha_visita">
        </div>
        
        
        
        <div class="col">
            <label for="empresa_id">ID EMPRESA:</label>
            <select name="empresa_id" id="empresa_id" required>
                @foreach ($empresas as $id => $display)
                <option value=" {{ $id }} "> {{ $display }} </option>
                @endforeach
            </select>


            <div class="col-all">
                <p>Documentos:</p>
                <label  for="ruta">Solicitud de Visita</label>
                <input name="ruta" type="file" accept="application/pdf">
            </div>
            <input type="submit" value="ENVIAR">
    </form>
</section>

@endsection