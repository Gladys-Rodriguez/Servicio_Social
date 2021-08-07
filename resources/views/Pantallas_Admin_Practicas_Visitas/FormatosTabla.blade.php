<table class="table table-striped table-hover table-dark my-4">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($formatos as $formato)
            <tr>
                <td> {{ $formato->nombre }} </td>
                <td> {{ $formato->tipo }} </td>
                <td> {{ $formato->estado ? 'Visible' : 'Oculto'}} </td>
                <td>
                    <div class="btn-group-vertical" role="group" >
                    <a class="btn btn-sm btn-primary mb-2" target="_blank" href=" @php echo \Illuminate\Support\Facades\Storage::url($formato->ruta) @endphp">
                        Ver Formato
                    </a>
                    <a class="btn btn-sm btn-warning" href=" {{ route( 'AdminPracticas.editarFormato' , ['visita_formato' => $formato->id]) }}"> Modificar </a>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>