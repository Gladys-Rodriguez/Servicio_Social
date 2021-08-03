@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Expediente de Reportes')

@section('css')
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/expediente.css')}}">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid py-5" >

<h1><span class="blue"></span><span class="blue"></span> <span class="yellow"></span></h1>
    <h1>Revisión de <a  target="_blank">Reportes</a> </h1>
<br>
<div class="table-responsive">

<table class="register">
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
</div>
<br>


<div class="table-responsive">

<table class="container">
    <thead>
        <tr>
            <th><h1>Tipo de documento </h1></th>
            <th><h1>Nombre del Documento</h1></th>
            <th><h1>Observaciones</h1></th>
            <th><h1>Estado</h1></th>
            <th><h1>Verificar</h1></th>
        </tr>
    </thead>



    <tbody>

        @foreach($docs as $doc)

                        <tr>

                            <td>{{ $doc->tipo_doc }} </td>
                            <td>{{ $doc->nombre_doc }} </td>
                            <td>{{ $doc->observaciones}}</td>
                            <td class="estado">{{ $doc->estado ? 'Aceptado': 'Sin Validar'}}</td>
                            <td class="btn">
                               <!-- <a target="_blank" href="/storage/{{ $doc->user }}/{{ $doc->nombre_doc }}" class="btn ">
                                Verificar Documento
                                </a> -->
                                <a  href="{{ route('EditarReportes.edit', $doc->id) }}" class="verificar"> Verificar Documento</a>

                            </td>


                        </tr>

          @endforeach

    </tbody>
</table>
</div>
</form>
<br><br>
@foreach ($alumno as $alum )
    <a  class="regresar" href="{{route('DatosServicio.index', $alum->id_usuarios)}}"> Regresar </a>
    @endforeach


</div>
@endsection

@section('script')


@endsection
