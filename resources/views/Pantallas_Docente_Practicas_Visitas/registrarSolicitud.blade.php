@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Registro de Solicitud para Visita Escolar </h1>
</section>

<section class="section-dos">
    <div class="content-wrap">
        @include('Pantallas_Docente_Practicas_Visitas.Layout.datosEmpresa')

        <h2>Datos de la Solicitud</h2>
        <form class="form" action=" {{ route('docente.guardarSolicitud') }} " method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="empresa_id" value="{{ $empresa->id}}">
            <input type="hidden" name="docente_id" value="{{ $docente->id}}">
        
            <label for="fecha_visita">FECHA VISITA: </label>
            <input type="date" name="fecha_visita" id="fecha_visita">

            <p>Documentos:</p>
                <label  for="ruta">Solicitud de Visita</label>
                <input name="ruta" type="file" accept="application/pdf">
        
            Antes de registrar vreifica que todos los datos sean correctos
            <button type="submit">Registrar Solicitud </button>
        </form>
    </div>
</section>
@endsection
