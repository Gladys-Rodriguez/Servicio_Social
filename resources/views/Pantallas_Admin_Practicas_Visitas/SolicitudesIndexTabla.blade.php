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
                    <td> {{ $visita->visita_estado->estado }} </td>
                    <td>
                        <a type="button" class="btn btn-sm btn-primary mb-1 w-100" href=" {{ route('AdminPracticas.editarSolicitud',['visita'=>$visita->id]) }} ">
                            Ver Solicitud
                        </a>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
</div>
<div class="d-flex justify-content-center">
    {{$visitas->links()}}
</div>