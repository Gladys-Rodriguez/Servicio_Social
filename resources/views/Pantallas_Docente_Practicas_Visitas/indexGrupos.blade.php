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
        <div class="display-5 mb-4"><div class="d-inline text-warning"> <strong>PASO 3: </strong></div> Seleccione los grupos que desea llevar</div>
        <div class="progress mb-5" style="height:40px;">
            <div class="progress-bar progress-bar-striped bg-warning"
                style="width:60%;"
                role="progressbar"
                aria-valuenow="60"
                aria-valuemin="0"
                aria-valuemax="100">
            </div> 
        </div>

        <div class="h2">Grupos Seleccionados</div>
        <table class="table table table-striped table-hover table-dark my-4">
            <thead>
                <tr>
                    <th>Secuencia</th>
                    <th>Carrera</th>
                    <th>No de Alumnos </th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($gruposVisita as $grupoVisita)
                    <tr>
                        <td> {{ $grupoVisita->grupo->secuencia }} </td>
                        <td> {{ $grupoVisita->grupo->carrera->nombre }} </td>
                        <td> {{ $grupoVisita->cantidad_alumnos }} </td>
                        <td> 
                            <form action=" {{ route('docente.eliminarGrupoVisita', ['grupoVisita' => $grupoVisita->id]) }} " method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Quitar Grupo</button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

        <hr class="my-5"> 

        <div class="h2">Lista de Grupos</div>
        <table class="table table table-striped table-hover table-dark my-4">
            <thead>
                <tr>
                    <th>Secuencia</th>
                    <th>Carrera</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($grupos as $grupo)
                    <tr>
                        <td> {{ $grupo->secuencia }} </td>
                        <td> {{ $grupo->carrera->nombre }} </td>
                        <td>
                            <a role="button" class="btn btn-sm btn-primary" 
                                href=" {{route('docente.crearGrupoVisita', ['grupo' => $grupo->id, 'visita' => $visita->id]) }} ">
                                        Agregar Grupo
                            </a>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$grupos->links()}}
        </div>
        
        <div class="d-flex justify-content-end mt-5">
            <a role="button" class="btn btn-light mx-4" href=" {{route('docente.index')}} ">Rregresar</a>
            <a role="button" class="btn btn-light" href=" {{route('docente.indexDocumentosSolicitud', ['visita' => $visita->id])}} ">Continuar</a>
        </div>
        
    </div>
</div>


@endsection

