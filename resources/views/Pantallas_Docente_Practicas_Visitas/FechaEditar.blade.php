@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')


@section('title', 'Editar Fecha')

@section('content')

<section class="section-main">
    <h1> Fecha de la Visita Escolar </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        
        <div class="display-5 mb-4"><div class="d-inline text-warning"> <strong>Editar </strong></div>Fecha para la Visita Escolar </div>
        <hr class="my-5">

        <div class="h2"> Datos de la solicitud </div>
        <form class="form" action=" {{ route('docente.actualizarSolicitudes',['visita'=>$visita]) }} " method="POST" enctype="multipart/form-data">
            
            @method('PUT')
            @csrf

            <label for="fecha_visita" class="form-label">Fecha de la Visita </label>
            <input name="fecha_visita" type="date" class="form-control" value=" {{ old('fecha_visita') ?? $visita->fecha_visita ?? ''}}" />
            @if ($errors->has('fecha_visita'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('fecha_visita') }}
                </div>
            @endif
            <br /> 
        

            <div class="d-flex justify-content-end">
                <a role="button" class="btn btn-danger mx-3" href="{{ URL::previous() }}">Regresar</a>
                <button type="submit" class="btn btn-light">Registrar Solicitud </button>
            </div>
            
        </form>
    </div>
</div>

@endsection