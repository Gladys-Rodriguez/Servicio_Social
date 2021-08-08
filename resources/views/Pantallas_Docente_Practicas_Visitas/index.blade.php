@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('title', 'Solicitudes')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Mis Solicitudes</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white p-5" style="min-height: 600px">
        <div class="display-4 mb-4">Lista de Solicitudes Realizadas</div>
    
        <div class="table-responsive-md">
            <table class="table table-striped table-hover table-dark my-4">
            
                <thead>
                    <tr>
                        <th>ID SOLICITUD</th>
                        <th>EMPRESA SOLICITADA</th>
                        <th>FECHA SOLICITADA</th>
                        <th>OBSERVACIONES</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @forelse ($visitas as $visita)
                        <tr>
                            <td> {{ $visita->id }} </td>
                            <td> {{ $visita->empresa->nombre }} </td>
                            <td> {{ date('F d, Y', strtotime($visita->fecha_visita)) }} </td>
                            <td> {{ $visita->observaciones }} </td>
                            <td> {{ $visita->visita_estado->estado }} </td>
                            <td>
                                    @if ($visita->visita_estado->id == 2 || $visita->visita_estado->id == 4 || $visita->visita_estado->id == 6 || $visita->visita_estado->id == 7 || $visita->visita_estado->id == 5 )
                                    <a type="button" class="btn btn-sm btn-primary mb-1 w-100" href=" {{ route('docente.verSolicitud',['visita'=>$visita->id]) }} ">
                                        Ver
                                    </a>
                                    @endif
                                    
                                    @if ($visita->visita_estado->id == 1)
                                    <a type="button" class="btn btn-sm btn-warning mb-1 w-100" href=" {{ route('docente.verSolicitud',['visita'=>$visita->id]) }} ">
                                        Continuar
                                    </a>
                                    @endif

                                    @if ($visita->visita_estado->id == 3)
                                    <a type="button" class="btn btn-sm btn-warning mb-1 w-100" href=" {{ route('docente.verSolicitud',['visita'=>$visita->id]) }} ">
                                        Corregir
                                    </a>
                                    @endif

                                    @if ($visita->visita_estado->id == 5)
                                    <a type="button" class="btn btn-sm btn-success mb-1 w-100" href=" {{ route('docente.indexDocumentosVisita',['visita'=>$visita->id]) }} ">
                                        Subir Documentos
                                    </a>
                                    @endif
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
        </div>
    
        <hr class="my-5">
        <div class="h2 mb-3">¿Desea realizar una solicitud para una Visita Escolar? </div>
                Haga clic en el siguiente botón: 
            <a type="button" class="btn btn-primary btn-sm" href=" {{ route('docente.registrarEmpresa') }} "> Registrar Nueva Solicitud </a>
            
    </div>
</div>

<script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("menu_visitas");
    activo.classList.add("active");
    activo= document.getElementById("solicitudes");
    activo.classList.add("active");
</script>

@endsection
