@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('title')
Visitas Docentes
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection


@section('content')
<section class="section-main">
    <h1>Bienvenido a Prácticas y Visitas Escolares</h1>
</section>

<section class="section-dos">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DOCENTE</th>
                <th>EMPRESA</th>
                <th>FECHA</th>
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
                        <a
                        href="{{ action('DocenteVisitaController@show', ['DocenteVisita' => $visita->id]) }}"
                        style="color:blue"
                        alt="View"
                        title="View">
                        Ver Detalles
                        </a>
                        <a
                        href="{{ action('DocenteVisitaController@edit', ['DocenteVisita' => $visita->id]) }}"
                        style="color:blue"
                        alt="Edit"
                        title="Edit">
                        Editar
                        </a>
                    </td>
                    
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
    <a class="btn" href="{{ route('DocenteVisitas.create')}}" role="button"> Realizar una nueva Solicitud </a>
@endsection

