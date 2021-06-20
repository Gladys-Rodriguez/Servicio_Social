<h2>Pagina Index</h2>

<a href=" {{ route('docente.solicitarVisita')}} "> Realizar una nueva Solicitud </a>
<br /><br />

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