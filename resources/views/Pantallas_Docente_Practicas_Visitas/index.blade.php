@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Solicitudes de Visitas Escolares</h1>
</section>

<section class="section-dos">
    <div class="content-wrap">
        <h2>Lista de Solicitudes Realizadas</h2>
        <p>¿Desea realizar una solicitud para una Visita Escolar? <br />
            Haga clic en el siguiente botón: 
            <a href=" {{ route('docente.mostrarEmpresas') }} "> Registrar Nueva Solicitud </a><p>
            
        <table class="table">
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
            <tbody>
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
                            <a href=" {{ route('docente.verVisita',['visita'=>$visita->id]) }} ">
                                Ver Detalles
                            </a>
                            <br />
                             <a href=" {{ route('docente.editarVisita',['visita'=>$visita->id]) }} ">
                                Editar
                            </a>
                        </td>
                        </tr>
                    @empty
                @endforelse
                </tbody>
        </table>
    </div>
</section>

@endsection
