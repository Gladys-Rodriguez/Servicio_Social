@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Documentos</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white p-5" style="min-height: 600px">
        <div class="display-4 mb-4">Editar Documento de Visita</div>
        <hr class="mb-5">

        <form action="{{ route('docente.actualizarVisitaDocumento', ['visitaDocumento' => $visitaDocumento]) }}" method="POST" enctype="multipart/form-data" >
            @method('PUT')

            <input type="hidden" value=" {{$visitaDocumento->visita_id}} " name="visita_id">
            
            <label for="tipo_documento_id" class="form-label">Tipo Documento:</label>
            <select name="tipo_documento_id" class="form-select" id="tipo_documento_id">
                @foreach($tipoDocumentos as $id => $display)
                    <option value="{{ $id }}" {{ (isset($visitaDocumento->tipo_documento_id) && $id === $visitaDocumento->tipo_documento_id) ? 'selected' : '' }}> {{ $display }}</option>
                    
                @endforeach
            </select>
            <br />

            <label for="ruta" class="form-label">Documento:</label>
            <input name="ruta" type="file" accept="application/pdf" class="form-control">
            <br />

            <div class="d-flex justify-content-end mt-4">
                <a class="btn btn-light mx-3" href=" {{ route('docente.indexDocumentosSolicitud') }} "> Regresar</a>
                <button class="btn btn-warning" type="submit">Modificar Documento</button>
            </div>
            @csrf
        </form>
    </div>
</div>