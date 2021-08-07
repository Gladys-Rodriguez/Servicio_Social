
@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Detalles Solicitud </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Solicitud de Visita Escolar </div>

        <div class="h2 mb-3">Datos Generales</div>
        <div class="row" >
            <div class="col-4">
                <label class="form-label">ID de solicitud:</label>
                <input class="form-control" value=" {{ $visita->id}}" disabled>
                <br />
            </div>
            <div class="col-4">
                <label class="form-label">Estado de la Solicitud:</label>
                <input class="form-control" value=" {{ $visita->visita_estado->estado}}" disabled>
                <br />
            </div>           
            <div class="col-4">
                <label class="form-label">Fecha de la Visita:</label>
                <input class="form-control" value=" {{ date('F d, Y', strtotime($visita->fecha_visita)) }}" disabled>
                <br />
            </div>
        </div>

        <label class="form-label">Docente:</label>
        <input class="form-control" value=" {{ $visita->docente->dato->ap_paterno }}  {{$visita->docente->dato->ap_materno}} {{ $visita->docente->dato->nombre }}" disabled>
        <br />

        <label class="form-label">Academia:</label>
        <input class="form-control" value="{{ $visita->docente->academia }}" disabled>
        <br />

        @if ($visita->visita_estado->id == 1 || $visita->visita_estado->id == 3)
        <div class="d-flex justify-content-end mt-4">
            <a class="btn btn-warning" href=" # "> Modificar Fecha</a>
        </div>
        @endif
        
        <hr class="mt-4 mb-5">
        
        <div class="h2 mb-3">Datos de la Empresa</div>
  
        <label class="form-label">Nombre:</label>     
        <input class="form-control" value=" {{ $visita->empresa->nombre}}" disabled>   
        <br />

        <div class="row" >
            <div class="col-6">
                <label class="form-label">Estado/Ciudad:</label>
                <input class="form-control" value=" {{ $visita->empresa->direccion->ciudad}}" disabled>
                <br />
            </div>
            <div class="col-6">
                <label class="form-label">Municipio/Alcaldia:</label>
                <input class="form-control" value=" {{ $visita->empresa->direccion->alcaldia}}" disabled>
                <br />
            </div>
        </div>

        <div class="row" >
            <div class="col-6">
                <label class="form-label">Colonia:</label>
                <input class="form-control" value=" {{ $visita->empresa->direccion->colonia}}" disabled>
                <br />
            </div>
            <div class="col-6">
                <label class="form-label">Calle:</label>
                <input class="form-control" value=" {{ $visita->empresa->direccion->calle}}" disabled>
                <br />
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label class="form-label">Num ext:</label>
                <input class="form-control" value=" {{ $visita->empresa->direccion->num_ext}}" disabled>
                <br />
            </div>
            <div class="col-4">
                <label class="form-label">Num int:</label>
                <input class="form-control" value=" {{ $visita->empresa->direccion->num_int}}" disabled>
                <br />
            </div>

            <div class="col-4">
                <label class="form-label">Código postal:</label>
                <input class="form-control" value=" {{ $visita->empresa->direccion->cp}}" disabled>
                <br />
            </div>
        </div>
        
        @if ($visita->visita_estado->id == 1 || $visita->visita_estado->id == 3)
        <div class="d-flex justify-content-end mt-4">
            <a class="btn btn-warning mx-3" href=" # "> Modificar Empresa</a>
            <a class="btn btn-warning" href=" # "> Seleccionar otra Empresa</a>
        </div>
        @endif


        <hr class="mt-4 mb-5">

        <div class="h2 mb-3">Grupos Seleccionados</div>
        <table class="table table table-striped table-hover table-dark my-4">
            <thead>
                <tr>
                    <th>Secuencia</th>
                    <th>Carrera</th>
                    <th>No de Alumnos </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($gruposVisita as $grupoVisita)
                    <tr>
                        <td> {{ $grupoVisita->grupo->secuencia }} </td>
                        <td> {{ $grupoVisita->grupo->carrera->nombre }} </td>
                        <td> {{ $grupoVisita->cantidad_alumnos }} </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

        @if ($visita->visita_estado->id == 1 || $visita->visita_estado->id == 3)
        <div class="d-flex justify-content-end mt-4">
            <a class="btn btn-warning" href=" {{ route('docente.mostrarGrupos', ['visita' => $visita->id])}} "> Modificar Grupos</a>
        </div>
        @endif

        <hr class="mt-5 mb-5">

        <div class="h2 mb-3">Documentos</div>
        <table class="table table-striped table-hover table-dark my-4">
            <thead>
                <th>ID SOLICITUD</th>
                <th>TIPO DOCUMENTO</th>
                <th>ESTADO</th>
                <th>OBSERVACIONES</th>
                <th>ACCIONES</th>
            </thead>
            <tbody>
                @forelse ($documentos as $documento)
                <tr>
                    <td> {{ $documento->visita_id }} </td>
                    <td> {{ $documento->tipo_documento->nombre }} </td>
                    <td> {{ $documento->validacion ? 'Aceptada' : 'Sin validar' }} </td>
                    <td> {{ $documento->observaciones }} </td>
                    <td> 
                        <a class="btn btn-primary btn-sm" target="_blank" href=" @php echo \Illuminate\Support\Facades\Storage::url($documento->ruta) @endphp">
                            Ver Documento
                        </a>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        @if ($visita->visita_estado->id == 1 || $visita->visita_estado->id == 3)
        <div class="d-flex justify-content-end mt-4">
            <a class="btn btn-warning" href=" {{route('docente.indexDocumentosSolicitud', ['visita' => $visita->id])}}"> Modificar Documentos</a>
        </div>
        @endif

        <div class="d-flex justify-content-end mt-4">
            <a class="btn btn-light mx-3" href=" {{route('docente.index')}}  "> Regresar</a>
            @if ($visita->visita_estado->id == 1 || $visita->visita_estado->id == 3)
            <a class="btn btn-light mx-3" data-bs-toggle="modal" data-bs-target="#confirmacionModal" > Finalizar Solcitud</a>
            @endif
            
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
@endsection