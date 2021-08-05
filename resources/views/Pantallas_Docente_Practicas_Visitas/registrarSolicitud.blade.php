@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Fecha y Solicitud de la Visita Escolar </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        
        <div class="display-5 mb-4"><div class="d-inline text-warning"> <strong>PASO 2: </strong></div>Indica la fecha para la Visita Escolar y sube tu solicitud </div>
        <div class="progress mb-5" style="height:40px;">
            <div class="progress-bar progress-bar-striped bg-warning"
                style="width:50%;"
                role="progressbar"
                aria-valuenow="50"
                aria-valuemin="0"
                aria-valuemax="100">
            </div> 
        </div>

        <div class="h2"> Empresa Seleccionada </div>
        <label class="form-label">Nombre:</label>
        <input class="form-control" value=" {{ $empresa->nombre}}" disabled>
        <br/>
        <div class="row">
            <div class="col-6"> 
                <label class="form-label">Estado/Ciudad:</label>
                <input class="form-control" value=" {{ $empresa->direccion->ciudad}}" disabled>
            </div> 
            <div class="col-6">
                <label class="form-label">Alcaldía/Munucipio:</label>
                <input class="form-control" value=" {{ $empresa->direccion->alcaldia}}" disabled>
            </div> 
        </div>
        
        <hr class="my-5">

        <div class="h2"> Datos de la solicitud </div>
        <form class="form" action=" {{ route('docente.guardarSolicitud') }} " method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="empresa_id" value="{{ $empresa->id}}">
            <input type="hidden" name="docente_id" value="{{ $docente->id}}">
            <input type="hidden" name="visita_estado_id" value= "1">
        
            <label for="fecha_visita" class="form-label">Fecha de la Visita </label>
            <input name="fecha_visita" type="date" class="form-control" value=" {{ old('fecha_visita') }}" />
            @if ($errors->has('fecha_visita'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('fecha_visita') }}
                </div>
            @endif
            <br /> 
        

            <div class="d-flex justify-content-end">
                <a role="button" class="btn btn-danger mx-3" href="{{route('docente.mostrarEmpresas')}}">Regresar</a>
                <button type="submit" class="btn btn-light">Registrar Solicitud </button>
            </div>
            

        </form>
    </div>
</div>

@endsection
