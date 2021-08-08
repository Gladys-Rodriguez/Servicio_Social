@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Editar Documento Requerido')

@section('content')

    <section class="section-main">
        <h1>Editar Documentación Requerida</h1>
    </section>

    <div class="container-fluid bg-dark text-white py-5" >
        <div class="container border rounded p-5" style="min-height: 600px">
            <div class="display-4 mb-3">Editar <div class="d-inline text-warning"> <strong>Documento Requerido</strong></div> </div>
            <form  action="{{ route('AdminPracticas.actualizarTipoDocumento', ['tipo_documento' => $tipo_documento]) }}"  method="POST">
                @method('PUT')
                @csrf
                <hr class="mb-4">
                <label for="nombre" class="form-label" >Nombre del Documento: </label>
                <input type="text" class="form-control" id="nombre" name="nombre" value=" {{ old('nombre') ?? $tipo_documento->nombre ?? '' }} "/>
                @if ($errors->has('nombre'))
                    <div class="alert alert-warning p-2 mt-2" role="alert">
                        <i class="bi bi-exclamation-triangle"></i>
                        {{ $errors->first('nombre') }}
                    </div>
                @endif
                <br />

                <label for="etapa" class="form-label">Etapa: </label>
                <select  class="form-select" id="etapa" name="etapa">
                    <option value="Solicitud" {{ isset($tipo_documento->etapa) && "Solicitud" === $tipo_documento->etapa ? 'selected' : '' }}>Documento para Solicitud</option>
                    <option value="Visita" {{ isset($tipo_documento->etapa) && "Visita" === $tipo_documento->etapa ? 'selected' : '' }}>Documento para Visita Aceptada</option>
                </select>
                @if ($errors->has('etapa'))
                    <div class="alert alert-warning p-2 mt-2" role="alert">
                        <i class="bi bi-exclamation-triangle"></i>
                        {{ $errors->first('etapa') }}
                    </div>
                @endif
                <br />

                <label for="estado" class="form-label">Estado: </label>
                <select  class="form-select" id="estado" name="estado">
                    <option value="1" {{ isset($tipo_documento->estado) && 1 === $tipo_documento->estado ? 'selected' : '' }} >Habilitado</option>
                    <option value="0" {{ isset($tipo_documento->estado) && 0 === $tipo_documento->estado ? 'selected' : '' }} >Deshabilitado</option>
                </select>
                @if ($errors->has('estado'))
                    <div class="alert alert-warning p-2 mt-2" role="alert">
                        <i class="bi bi-exclamation-triangle"></i>
                        {{ $errors->first('estado') }}
                    </div>
                @endif
                <br />

                <input type="hidden" name="tramite" value="Visitas Escolares">

                <div class="d-flex justify-content-end"> 
                    <a role="button" class="btn btn-danger text-end mx-2" href=" {{route('AdminPracticas.indexTipoDocumento')}} ">Cancelar</a>
                    <button type="submit" class="btn btn-light" >Editar Documento</button>
                </div>
            </form>
    </div>

@endsection

@section('script')
  <script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("Menu_Documentos");
    activo.classList.add("active");
    activo = document.getElementById("Doc_Ver");
    activo.classList.add("active");
  </script>
@endsection