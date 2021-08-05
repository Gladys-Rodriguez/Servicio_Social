@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Seleccionar Grupos</h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container text-white border rounded p-5">
        <div class="display-5 mb-4">Indica el número de Alumnos</div>
        <div class="progress mb-5" style="height:40px;">
            <div class="progress-bar progress-bar-striped bg-secondary"
                style="width:75%;"
                role="progressbar"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100">
            </div> 
        </div>

        <div class="h2">Datos del Grupo </div>
        <label class="form-label">Secuencia </label> 
        <input class="form-control" value="{{ $grupo->secuencia }}" disabled/>
        <br>

        <label class="form-label">Carrera </label> 
        <input class="form-control" value="{{ $grupo->carrera->nombre }}" disabled/>
        <br />
        
        <form action=" {{ route('docente.guardarGrupoVisita') }} " method="POST" >
            @csrf

            <input type="hidden" name="visita_id" value=" {{$visita->id}} ">
            <input type="hidden" name="grupo_id" value=" {{$grupo->id}} ">
        
            <label for="cantidad_alumnos" class="form-label">Número de Alumnos: </label>
            <input type="number" max=50 min="0" placeholder="Ingresa el número de Alumnos" name="cantidad_alumnos" id="cantidad_alumnos" class="form-control"/>
            <br>

            <div class="d-flex justify-content-end">
                <a class="btn btn-danger mx-3" href="{{ route('docente.mostrarGrupos', ['visita' => $visita->id])}} "> Cancelar</a>
                <button class="btn btn-light" type="submit">Registrar</button>
            </div>
            
        </form>
    </div>
</div>


