@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Lista de Docentes')

@section('content')

<section class="section-main">
    <h1> Docentes</h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Lista de <div class="d-inline text-warning"> <strong>Docentes</strong></div></div>
        <div class="table-responsive-md">
            <table class="table table-striped table-hover table-dark my-4">
            
                <thead>
                    <tr>
                        <th>NUM EMPLEADO</th>
                        <th>NOMBRE</th>
                        <th>ACADEMIA</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @forelse ($docentes as $docente)
                        <tr>
                            <td> {{ $docente->user->id }} </td>
                            <td>
                                {{ $docente->dato->nombre }}
                                {{ $docente->dato->ap_paterno }}
                                {{ $docente->dato->ap_materno }}
                            </td>
                            <td> {{ $docente->academia }} </td>
                            <td> {{ $docente->user->estado ? 'Activo' : 'Deshabilitado' }} </td>
                            <td>
                                <div class="btn-group-vertical" role="group" >
                                    <a type="button" class="btn btn-sm btn-primary mb-1" href=" {{ route('AdminPracticas.editarDocente', ['docente'=>$docente->id]) }} ">
                                        Modificar
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                </tbody>
            </table>
        </div>      




    </div>
</div>
@endsection

@section('script')
  <script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("Menu_Administracion");
    activo.classList.add("active");
    activo = document.getElementById("Docente_Ver");
    activo.classList.add("active");
  </script>
@endsection