@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Validar Documento</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white p-5" style="min-height: 600px">
        <div class="display-4 mb-4">Validar Documento</div>
        <hr class="mb-5">
        
        

        <form action=" {{route('AdminPracticas.actualizarDocumentosSolicitud', ['visita_documento' => $visita_documento]) }} " method="POST" enctype="multipart/form-data" >
            @method('PUT')

            <div class="row">
                <div class="col-8">
                    <input type="hidden" value=" {{$visita_documento->visita_id}} " name="visita_id">
                    @if ($errors->has('visita_id'))
                        <div class="alert alert-warning p-2 mt-2" role="alert">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('visita_id') }}
                        </div>
                    @endif
                    
                    <label for="tipo_documento_id" class="form-label">Tipo Documento:</label>
                    <select name="tipo_documento_id" class="form-select" id="tipo_documento_id" disabled>
                        @foreach($tipoDocumentos as $id => $display)
                            <option value="{{ $id }}" {{ (isset($visita_documento->tipo_documento_id) && $id === $visita_documento->tipo_documento_id) ? 'selected' : '' }}> {{ $display }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('tipo_documento_id'))
                        <div class="alert alert-warning p-2 mt-2" role="alert">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('tipo_documento_id') }}
                        </div>
                    @endif
                    <br />
                </div>
                <div class="col-4">
                    <br />
                    <a class="btn btn-primary btn-lg" target="_blank" href=" @php echo \Illuminate\Support\Facades\Storage::url($visita_documento->ruta) @endphp">
                        Ver Documento
                    </a>
                </div>
            </div>
            
            <label for="validacion" class="form-label">Estado:</label>
            <select  class="form-select" id="validacion" name="validacion">
                <option value="0" {{ isset($visita_documento->validacion) && 0 === $visita_documento->validacion ? 'selected' : '' }} > No Valido</option>
                <option value="1" {{ isset($visita_documento->validacion) && 1 === $visita_documento->validacion ? 'selected' : '' }} > Aceptado</option>
            </select>
            <br>
            <label for="observaciones" class="form-label">Observaciones:</label>
            <textarea class="form-control" name="observaciones" id="observaciones" rows="10" cols="50" 
            placeholder="Escribe las observaciones y correciones" > {{ $visita_documento->observaciones ?? '' }} </textarea>


            <div class="d-flex justify-content-end mt-4">
                <a class="btn btn-light mx-3" href=" {{ URL::previous() }} "> Regresar</a>
                <button class="btn btn-warning" type="submit">Terminar Validación</button>
            </div>
            @csrf
        </form>
    </div>
</div>