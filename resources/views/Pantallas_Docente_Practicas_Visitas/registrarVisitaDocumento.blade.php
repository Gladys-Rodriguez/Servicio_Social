@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('title', 'Regisrar Dcumento')

@section('content')

<section class="section-main">
    <h1>Documentos de Visita</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white p-5" style="min-height: 600px">
        <div class="display-5 mb-4">Subida de<div class="d-inline text-warning"> <strong>Documentos de Visita</strong></div></div>

        <div class="h2 mb-3">Documentos de Visita Subidos</div>
        <table class="table table-striped table-hover table-dark my-4">
            <thead>
                <th>ID SOLICITUD</th>
                <th>TIPO DOCUMENTO</th>
                <th>ESTADO</th>
                <th>OBSERVACIONES</th>
                <th>ACCIONES</th>
            </thead>
            <tbody class="align-middle">
                @forelse ($documentos as $documento)
                @if ($documento->tipo_documento->etapa == "Visita")
                <tr>
                    <td> {{ $documento->visita_id }} </td>
                    <td> {{ $documento->tipo_documento->nombre }} </td>
                    <td> {{ $documento->validacion ? 'Aceptada' : 'Sin validar' }} </td>
                    <td> {{ $documento->observaciones }} </td>
                    <td> 
                        <div class="btn-group-vertical" role="group" >
                            <a class="btn btn-primary btn-sm mb-1" target="_blank" href=" @php echo \Illuminate\Support\Facades\Storage::url($documento->ruta) @endphp">
                                Ver Documento
                            </a>
                            <a class="btn btn-warning btn-sm" href=" {{ route('docente.editarDocumentosSolicitud', ['visita_documento' => $documento->id]) }}  ">
                                Modificar Doc.
                            </a>                        
                        </div>
                        
                    </td>
                </tr>
                @endif
                @empty
                @endforelse
            </tbody>
        </table>

        <hr class="mt-5 mb-5">

        <div class="h2 mb-3 text-warning">Subir Documento</div>

        <form action=" {{route('docente.guardarDocumentosSolicitud')}} " method="POST" enctype="multipart/form-data">
            <input type="hidden" name="visita_id" value=" {{$visita->id}} ">

            <label for="tipo_documento_id" class="form-label">Tipo Documento:</label>
            <select name="tipo_documento_id" class="form-select" id="tipo_documento_id">
                @foreach($tipoDocumentos as $id => $display)
                    <option value="{{ $id }}"> {{ $display }}</option>
                @endforeach
            </select>
            @if ($errors->has('tipo_documento_id'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('tipo_documento_id') }}
                </div>
            @endif
            <br />

            <label for="ruta" class="form-label">Documento:</label>
            <input name="ruta" type="file" accept="application/pdf" class="form-control">
            @if ($errors->has('ruta'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('ruta') }}
                </div>
            @endif
            <br />
            @csrf

            <div class="d-flex justify-content-end mt-4">
                <button class="btn btn-primary" type="submit">Subir Documento</button>
            </div>
        </form>

        <div class="d-flex justify-content-end mt-4">
            <a class="btn btn-light mx-3" href=" {{route('docente.index')}}  "> Regresar</a>
            
        </div>
        
    </div>
</div>