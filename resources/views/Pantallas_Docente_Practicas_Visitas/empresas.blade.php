<h2>Seleccione su empresa</h2>

¿Su empresa no se encuentra en la lista?
<a href=" {{ route('docente.registrarEmpresa') }}  ">Registrela Aquí </a>

<table>
    <thead>
        <tr>
            <th>Empresa</th>
            <th>Estado</th>
            <th>Alcaldía/Municipio</th>
            <th>Colonia</th>
            <th>Calle</th>
            <th>Núm. Ext</th>
            <th>Núm. Int</th>
            <th>CP</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($empresas as $empresa)
            <tr>
                <td> {{ $empresa->nombre }} </td>
                <td> {{ $empresa->direccion->ciudad }} </td>
                <td> {{ $empresa->direccion->alcaldia }}  </td>
                <td> {{ $empresa->direccion->colonia }}  </td>
                <td> {{ $empresa->direccion->calle }}  </td>
                <td> {{ $empresa->direccion->num_ext }}  </td>
                <td> {{ $empresa->direccion->num_int }}  </td>
                <td> {{ $empresa->direccion->cp }}  </td>
                <td>
                    <a href=" {{ route('docente.solicitarVisita',['empresa'=>$empresa->id]) }} ">
                        Seleccionar
                    </a>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>

{{$empresas->links('vendor.pagination.simple-tailwind')}}
