@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('content')

<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/docs.css')}}">

<!-- Diseño de gladys -->
<h1>Validación de Documentos para Liberación</h1>
<br><br>
<table class="datos">
    <thead>
        <tr>
            <th><h1>Periodo de Reporte </h1></th>
            <th><h1>Nombre del Reporte</h1></th>
            <th><h1>Ver el Documento</h1></th>
            <th><h1>Volver</h1></th>
        </tr>
    </thead>

    <tbody>



        <tr>

            <td>{{ $docs->tipo_doc }} </td>
            <td>{{ $docs->nombre_doc }} </td>

            <td>
                <a target="_blank" href="/storage/{{ $docs->user}}/{{ $docs->nombre_doc }}" value="{{ $docs->nombre_doc}}" class="btn btn-danger "> Ir al documento</a>
            </td>

            <td class="vuelve">
                <a  href="{{ route('Expediente_Reportes.docs', $docs->user) }}" class="volver "> volver</a>
            </td>

        </tr>



</tbody>
</table>

<br>


<form method="POST" action="{{ route('UpdateDocsLiberacion.update',$docs->id) }}" enctype="multipart/form-data">
    @csrf
<table class="container">
    <thead>

            <tr>
            <th class="observacion-th"><h1>Observaciones</h1></th>
            <td class="observacion-td"><textarea rows="3" cols="1" class="observaciones" name="observaciones">{{$docs->observaciones}}</textarea></td>
            </tr>
            <tr>
            <th><h1>Estado</h1></th>
            <td>
                <textarea disabled rows="1" cols="1"class="estado">El documento se encuentra: {{$docs->estado ? 'Validado': 'Sin Validar'}}
                </textarea>
                <select class="select" name="estado" >
                <option value="{{$docs->estado}}"></option>
                <option value="0"> Sin validar</option>
                <option value="1"> Validado</option>
            </td>
            </tr>
            <tr>
            <th><h1></h1></th>
            <td class="btn-envio"><button type="submit" class="btn"> Enviar</button></td>
            </tr>

    </thead>
</table>
</form>

@endsection
