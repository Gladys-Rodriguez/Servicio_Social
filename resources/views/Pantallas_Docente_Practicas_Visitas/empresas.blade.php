@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Selecciona tu Empresa</h1>
</section>

<section class="section-dos">
    <div class="content-wrap">
        <h2>Tabla de Empresas Registradas</h2>
        <p> ¿Su empresa no se encuentra en la lista? <a href=" {{ route('docente.registrarEmpresa') }}  ">Registrela Aquí </a></p>
        <table class="table">
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
                            <a href=" {{ route('docente.registrarSolicitud',['empresa'=>$empresa->id]) }} ">
                                Seleccionar
                            </a>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <div class="paginacion">
            {{$empresas->links('vendor.pagination.simple-tailwind')}}
        </div>
    </div>
</section>

@endsection