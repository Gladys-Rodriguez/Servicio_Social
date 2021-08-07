@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')


@section('content')

<section class="section-main">
    <h1>Documentos Solicitud</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white p-5" style="min-height: 600px">
        <div class="display-5 mb-4"><div class="d-inline text-warning"> <strong>PASO 4: </strong></div> Sube tus Documentos</div>
        <div class="progress mb-5" style="height:40px;">
            <div class="progress-bar progress-bar-striped bg-warning"
                style="width:80%;"
                role="progressbar"
                aria-valuenow="80"
                aria-valuemin="0"
                aria-valuemax="100">
            </div> 
        </div>

        <div class="h2 mb-3">Documentos de Solicitud Subidos</div>
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
                            <a class="btn btn-primary btn-sm mb-1" target="_blank" href=" @php echo \Illuminate\Support\Facades\Storage::url($documento->ruta) @endphp">
                                Ver Documento
                            </a>
                            <a class="btn btn-warning btn-sm" href=" {{ route('docente.editarDocumentosSolicitud', ['visita_documento' => $documento->id]) }}  ">
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

        <div class="h2 mb-3 text-warning">Subir Documento</div>

        <form action=" {{route('docente.guardarDocumentosSolicitud')}} " method="POST" enctype="multipart/form-data">
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
                <button class="btn btn-primary" type="submit">Subir Documento</button>
            </div>
        </form>

        <div class="d-flex justify-content-end mt-4">
            <a class="btn btn-light mx-3" href=" {{route('docente.index')}}  "> Regresar</a>
            <a class="btn btn-light mx-3" data-bs-toggle="modal" data-bs-target="#confirmacionModal" > Finalizar Solcitud</a>
        </div>
          
          <div id="confirmacionModal" class="modal fade text-dark" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Confirmación de Solicitud</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>¿Esta seguro de que de desea terminar su solicitud? </p>
                    <p>No podra realizar más cambios después de Terminar</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
                  <a class="btn btn-danger mx-3" href="{{ route('docente.ModificarEstado', ['visita' => $visita->id])}}" > Finalizar Solcitud</a>
                </div>
              </div>
            </div>
          </div>  
    </div>
</div>