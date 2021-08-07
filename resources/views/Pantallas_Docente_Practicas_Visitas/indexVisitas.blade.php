@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Mis Visitas</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white p-5" style="min-height: 600px">
        <div class="display-4 mb-4">Lista de Visitas Aprobadas</div>
    
        <div class="table-responsive-md">
            <table class="table table-striped table-hover table-dark my-4">
            
                <thead>
                    <tr>
                        <th>ID SOLICITUD</th>
                        <th>DOCENTE</th>
                        <th>EMPRESA SOLICITADA</th>
                        <th>FECHA SOLICITADA</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @forelse ($visitas as $visita)
                        <tr>
                            <td> {{ $visita->id }} </td>
                            <td>
                                {{ $visita->docente->dato->nombre }}
                                {{ $visita->docente->dato->ap_paterno }}
                                {{ $visita->docente->dato->ap_materno }}
                            </td>
                            <td> {{ $visita->empresa->nombre }} </td>
                            <td> {{ date('F d, Y', strtotime($visita->fecha_visita)) }} </td>
                            <td> {{ $visita->validacion ? 'Aceptada' : 'Sin validar' }} </td>
                            <td>
                                <div class="btn-group-vertical" role="group" >
                                    <a type="button" class="btn btn-sm btn-primary mb-1" href=" {{ route('docente.verSolicitud',['visita'=>$visita->id]) }} ">
                                        Ver Detalles
                                    </a>
                                    <a type="button" class="btn btn-sm btn-primary" href=" {{ route('docente.registrarVisitaDocumento',['visita'=>$visita->id]) }} ">
                                        Subir Documentos
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("menu_visitas");
    activo.classList.add("active");
    activo= document.getElementById("visitas");
    activo.classList.add("active");
</script>

@endsection
