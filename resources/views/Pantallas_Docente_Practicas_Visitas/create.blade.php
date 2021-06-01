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
</section>

<section class="section-dos">
    <form action="{{ route('DocenteVisitas.store') }}" method="POST" enctype="multipart/form-data" style="color:white">
        @csrf
        <label for="docente_id">ID DOCENTE: </label>
        <input type="text" name="docente_id" id="docente_id">
        <br />
    
        <label for="empresa_id">ID EMPRESA:</label>
        <select name="empresa_id" id="empresa_id" required>
            @foreach ($empresas as $id => $display)
                <option value=" {{ $id }} "> {{ $display }} </option>
            @endforeach
        </select>
        <br />
    
        <label for="fecha_visita">FECHA VISITA: </label>
        <input type="date" name="fecha_visita" id="fecha_visita">
        <br />
        
        <label  for="ruta">Documento</label>
        <input name="ruta" type="file"/>
        <br />
        
        <button type= "submit">Registrar Visita </button>
    </form>
</section>

@endsection

