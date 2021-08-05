@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Expediente de Reportes')

@section('css')
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/expediente.css')}}">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid py-5" >
    @foreach ($alumno as $alum )
    <a  class="regresar" href="{{route('DatosServicio.index', $alum->id_usuarios)}}"> Regresar </a>
    @endforeach
    <br><br>
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
            <th><h1><span class="material-icons">drive_file_rename_outline</span> Tipo de documento </h1></th>
                    <th><h1><span class="material-icons">description</span> Nombre del Documento</h1></th>
                    <th><h1><span class="material-icons">notifications_active</span> Observaciones</h1></th>
                    <th><h1><span class="material-icons">edit_attributes</span> Estado</h1></th>
                    <th><h1><span class="material-icons">preview</span> Verificar</h1></th>
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


    <br><br>
    <h1>Revisión de documentos para liberación</h1>
    <div class="table-responsive">

        <table class="container">
            <thead>
                <tr>
                    <th><h1><span class="material-icons">drive_file_rename_outline</span> Tipo de documento </h1></th>
                    <th><h1><span class="material-icons">description</span> Nombre del Documento</h1></th>
                    <th><h1><span class="material-icons">notifications_active</span> Observaciones</h1></th>
                    <th><h1><span class="material-icons">edit_attributes</span> Estado</h1></th>
                    <th><h1><span class="material-icons">preview</span> Verificar</h1></th>
                </tr>
            </thead>



            <tbody>

                @foreach($liberaciones as $doc)

                                <tr>

                                    <td>{{ $doc->tipo_doc }} </td>
                                    <td>{{ $doc->nombre_doc }} </td>
                                    <td>{{ $doc->observaciones}}</td>
                                    <td class="estado">{{ $doc->estado ? 'Aceptado': 'Sin Validar'}}</td>
                                    <td class="btn">
                                       <!-- <a target="_blank" href="/storage/{{ $doc->user }}/{{ $doc->nombre_doc }}" class="btn ">
                                        Verificar Documento
                                        </a> -->
                                        <a  href="{{ route('EditarDocsLiberación.edit', $doc->id) }}" class="verificar"> Verificar Documento</a>

                                    </td>


                                </tr>

                  @endforeach

            </tbody>
        </table>
        </div>

        <br><br>
        <h1>Control de <span class="Gold">Liberación </span> </h1>
    <br>

    @foreach($libera as $exp)
    <form action="{{route('ExpedienteLiberacion.update_liberacion', $exp->id_liberacions)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="table-responsive">
    <table class="registro">
        <thead>
            <tr>
                <th><h1>Estado del Proceso</h1></th>
                <th><h1>Fecha de Envío</h1></th>
                <th><h1>Observaciones</h1></th>

            </tr>
        </thead>
        <tbody>



                            <tr>
                                <td>
                                    <a disabled>Actualmente se encuentra: {{$exp->estado  ? 'Aceptado': 'Sin Validar'}}</a>
                                    <br>
                                    <select class="select" name="estado" >
                                    <option></option>
                                    <option value="0"> Sin validar</option>
                                    <option value="1"> Aceptado</option></td>
                                <td><input type="date" class="caja" name="fecha_envio" id="fecha_inicio" value="{{$exp->fecha_envio}}"></td>
                                <td class="observacion-td"><textarea rows="3" cols="1" class="observaciones" name="observaciones">{{$exp->observaciones}}</textarea></td>

                            </tr>
                            <tr>
                                <td><input type="hidden" name="boleta_alumno" id="boleta_alumno" value={{$exp->id_usuarios}}></td>
                                <td><a class="submit" href="{{route('DatosServicio.index', $exp->id_usuarios)}}">REGRESAR</button></td>
                                <td><button type="submit" class="submit">CONFIRMAR</button></td>
                            </tr>


        </tbody>
    </table>
        </div>
    </form>
    @endforeach


</div>
@endsection

@section('script')


@endsection
