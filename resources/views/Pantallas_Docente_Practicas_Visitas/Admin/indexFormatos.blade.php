
@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Formatos </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Formatos Plantilla Visibles</div>

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
                @forelse ($plantillas_visible as $plantilla)
                    <tr>
                        <td> {{ $plantilla->nombre }} </td>
                        <td> {{ $plantilla->tipo }} </td>
                        <td> {{ $plantilla->estado ? 'Visible' : 'Oculto'}} </td>
                        <td>
                            <div class="btn-group-vertical" role="group" >
                            <a class="btn btn-sm btn-primary mb-2" href=" @php echo \Illuminate\Support\Facades\Storage::url($plantilla->ruta) @endphp">
                                Ver
                            </a>
                            <a class="btn btn-sm btn-warning" href=" {{ route( 'adminVisitas.editarFormato' , ['visitaFormato' => $plantilla->id]) }} "> Modificar </a>
                            </div>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <hr class="my-5">

        <div class="display-5 mb-4" >Formatos Plantilla Ocultos</div>
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
                @forelse ($plantillas_oculto as $plantilla)
                    <tr>
                        <td> {{ $plantilla->nombre }} </td>
                        <td> {{ $plantilla->tipo }} </td>
                        <td> {{ $plantilla->estado ? 'Visible' : 'Oculto'}} </td>
                        <td>
                            <div class="btn-group-vertical" role="group" >
                            <a class="btn btn-sm btn-primary mb-2" href=" @php echo \Illuminate\Support\Facades\Storage::url($plantilla->ruta) @endphp">
                                Ver
                            </a>
                            <a class="btn btn-sm btn-warning" href=" {{ route( 'adminVisitas.editarFormato' , ['visitaFormato' => $plantilla->id]) }} "> Modificar </a>
                            </div>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>     
        <hr class="my-5">
    </div>
    <div class="container p-5 mt-5 border rounded text-white">
        <div class="display-5 mb-4" >Formatos Ejemplo Visibles</div>
        <table class="table table-striped table-hover table-dark my-4" >
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ejemplos_visible as $ejemplo)
                    <tr>
                        <td> {{ $ejemplo->nombre }} </td>
                        <td> {{ $ejemplo->tipo }} </td>
                        <td> {{ $ejemplo->estado ? 'Visible' : 'Oculto'}} </td>
                        <td>
                            <div class="btn-group-vertical" role="group" >
                            <a class="btn btn-sm btn-primary mb-2 " href=" @php echo \Illuminate\Support\Facades\Storage::url($ejemplo->ruta) @endphp">
                                Ver
                            </a>
                            <a class="btn btn-sm btn-warning" href=" {{ route( 'adminVisitas.editarFormato' , ['visitaFormato' => $ejemplo->id]) }} "> Modificar </a>
                            </div>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <hr class="my-5">

        <div class="display-5 mb-4" >Formatos Ejemplo Ocultos</div>
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
                @forelse ($ejemplos_oculto as $ejemplo)
                    <tr>
                        <td> {{ $ejemplo->nombre }} </td>
                        <td> {{ $ejemplo->tipo }} </td>
                        <td> {{ $ejemplo->estado  ? 'Visible' : 'Oculto'}} </td>
                        <td>
                            <div class="btn-group-vertical" role="group" >
                            <a class="btn btn-sm btn-primary mb-2" href=" @php echo \Illuminate\Support\Facades\Storage::url($ejemplo->ruta) @endphp">
                                Ver
                            </a>
                            <a class="btn btn-sm btn-warning" href=" {{ route( 'adminVisitas.editarFormato' , ['visitaFormato' => $ejemplo->id]) }} "> Modificar </a>
                            </div>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

