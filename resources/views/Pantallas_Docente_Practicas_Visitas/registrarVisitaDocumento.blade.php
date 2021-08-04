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
        <div class="display-4 mb-4">Lista de Documentos</div>

        <hr class=" mb-5">

        <div class="h2 mb-3">Documentos Subidos</div>
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
                <tr>
                    <td> {{ $documento->visita_id }} </td>
                    <td> {{ $documento->tipo_documento->nombre }} </td>
                    <td> {{ $documento->validacion ? 'Aceptada' : 'Sin validar' }} </td>
                    <td> {{ $documento->observaciones }} </td>
                    <td> 
                        <div class="btn-group-vertical" role="group" >
                            <a class="btn btn-primary btn-sm mb-1" href=" @php echo \Illuminate\Support\Facades\Storage::url($documento->ruta) @endphp">
                                Ver Documento
                            </a>
                            <a class="btn btn-warning btn-sm" href=" {{route('docente.editarVisitaDocumento', ['visitaDocumento' => $documento->id])}} ">
                                Modificar Doc.
                            </a>                        
                        </div>
                        
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <hr class="mt-5 mb-5">

        <div class="h2 mb-3">Subir un nuevo Documento</div>

        <form action=" {{route('docente.guardarVisitaDocumento')}} " method="POST" enctype="multipart/form-data">
            <input type="hidden" name="visita_id" value=" {{$visita->id}} ">

            <label for="tipo_documento_id" class="form-label">Tipo Documento:</label>
            <select name="tipo_documento_id" class="form-select" id="tipo_documento_id">
                @foreach($tipoDocumentos as $id => $display)
                    <option value="{{ $id }}"> {{ $display }}</option>
                @endforeach
            </select>
            <br />

            <label for="ruta" class="form-label">Documento:</label>
            <input name="ruta" type="file" accept="application/pdf" class="form-control">
            <br />
            @csrf

            <div class="d-flex justify-content-end mt-4">
                <a class="btn btn-light mx-3" href=" {{ route('docente.mostrarVisitas')}} "> Regresar</a>
                <button class="btn btn-primary" type="submit">Subir Documento</button>
            </div>
        </form>

        
    </div>
</div>

@endsection