@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Control de Expediente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/expediente.css')}}">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')

<h1><span class="blue"></span><span class="blue"></span> <span class="yellow"></span></h1>
    <h2>Control de <a  target="_blank">Expediente </a> <br>
    Revisión de <a  target="_blank">Documentos</a> <br> </h2>

<table class="container">
    <thead>
        <tr>
            <th><h1>Nombre del alumno</h1></th>
            <th><h1>Carrera</h1></th>
            <th><h1>Boleta </h1></th>

        </tr>
    </thead>
    <tbody>
        @foreach ($alumno as $alum)


                        <tr>
                            <td>{{$alum->nombre}} {{$alum->ap_paterno}} {{$alum->ap_materno}}</td>
                            <td>{{$alum->carrera}}</td>
                            <td>{{$alum->id_usuarios}}</td>

                        </tr>
        @endforeach

    </tbody>
</table>

<table class="container">
    <thead>
        <tr>
            <th><h1>No. Doc. </h1></th>
            <th><h1>Nombre del Documento</h1></th>
            <th><h1>Estado</h1></th>
            <th><h1>Tipo de documento </h1></th>
            <th><h1>Observaciones</h1></th>
            <th><h1>No. de matricula  <h1></th>
            <th><h1>Ver</h1></th>

        </tr>
    </thead>
    <tbody>

        @foreach ($docs as $doc )
                        <tr>
                            <td> {{ $doc->id_doc_expedientesP }}  </td>
                            <td>{{ $doc->nombre_doc }} </td>
                            <td>{{ $doc->estado }} </td>
                            <td>{{ $doc->tipo_doc }} </td>
                            <td>{{ $doc->observaciones}} </td>
                            <td>{{ $doc->user}} </td>
                            <td>
                                <a target="_blank" href="/storage/{{ $doc->user }}/{{ $doc->nombre_doc }}" class="btn ">
                                Verificar Documento
                                </a>
                            </td>
                        </tr>
        @endforeach

    </tbody>
</table>

@endsection

@section('script')


@endsection
