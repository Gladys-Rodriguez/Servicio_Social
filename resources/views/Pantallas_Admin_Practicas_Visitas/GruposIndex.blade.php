@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('content')

<section class="section-main">
    <h1> Grupos</h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Lista de <div class="d-inline text-warning"> <strong>Grupos</strong></div></div>
        <table class="table table-striped table-hover table-dark my-4">
            <thead>
                <tr>
                    <th>Secuencia</th>
                    <th>Carrera</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($grupos as $grupo)
                    <tr>
                        <td> {{ $grupo->secuencia }} </td>
                        <td> {{ $grupo->carrera->nombre }} </td>
                        <td> {{ $grupo->estado ? 'Activo' : 'Deshabilitado'}} </td>
                        <td>
                            <div class="btn-group-vertical" role="group" >
                            <a class="btn btn-sm btn-warning" href=" {{ route( 'AdminPracticas.editarGrupo' , ['grupo' => $grupo->id]) }} "> Modificar </a>
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

@section('script')
  <script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("Menu_Administracion");
    activo.classList.add("active");
    activo = document.getElementById("Grupo_Ver");
    activo.classList.add("active");
  </script>
@endsection