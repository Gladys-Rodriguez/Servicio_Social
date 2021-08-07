@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('content')

<section class="section-main">
    <h1> Carreras</h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Lista de <div class="d-inline text-warning"> <strong>Carreras</strong></div></div>
        <table class="table table-striped table-hover table-dark my-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($carreras as $carrera)
                    <tr>
                        <td> {{ $carrera->nombre }} </td>
                        <td> {{ $carrera->estado ? 'Activo' : 'Deshabilitado'}} </td>
                        <td>
                            <div class="btn-group-vertical" role="group" >
                            <a class="btn btn-sm btn-warning" href=" {{ route( 'AdminPracticas.editarCarrera' , ['carrera' => $carrera->id]) }}"> Modificar </a>
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