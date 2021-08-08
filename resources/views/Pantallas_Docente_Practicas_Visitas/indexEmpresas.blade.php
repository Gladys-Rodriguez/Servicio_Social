@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Selecciona la Empresa</h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        
        <div class="display-5 mb-4"><div class="d-inline text-warning"> <strong>PASO 1: </strong></div> </strong> Selecciona tu Empresa</div>
        <div class="progress mb-5" style="height:40px;">
            <div class="progress-bar progress-bar-striped bg-warning"
                style="width:20%;"
                role="progressbar"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100">
            </div> 
        </div>

        <div class="h2 mb-4">Tabla de Empresas Registradas</div>
                <table class="table table-striped table-hover table-dark my-4">
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
                            <a role="button" class="btn btn-sm btn-primary" 
                                href=" {{ route('docente.registrarSolicitud',['empresa'=>$empresa->id]) }} ">
                                Seleccionar
                            </a>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$empresas->links()}}
        </div>

        <hr class="mt-5 mb-3">
    </div>
    <div class="container p-5 mt-5 border rounded text-white">
        <div class="h2 mb-4">¿La empresa que busca no se encuentra en la lista?</div>
        <p> Registrela haciendo clic en el siguiente boton:  <a type="button" class="btn btn-sm btn-primary" href=" {{ route('docente.registrarEmpresa') }}  ">Registrar Empresa </a></p>


        <a type="button" class="btn btn-light mt-4" href=" {{ route('docente.index') }} "><i class="bi bi-arrow-left"></i>Regresar</a>
    </div>
</div>

@endsection