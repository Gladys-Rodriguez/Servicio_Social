@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')



@section('content')
<section class="section-main">
	<h1>Documentación Requerida</h1>
</section>

<div class="container-fluid bg-dark py-5" >
    <div class=" container border rounded text-white mb-5 p-5" style="min-height: 600px">
        <div class="display-4 mb-4">Documentos de Visitas Escolares<div class="d-inline text-warning"> <strong>Requeridos </strong></div></div>
        <hr class="mb-5">
        <div class="table-responsive-md">
            <table class="table table-striped table-hover table-dark my-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE DOCUMENTO</th>
                        <th>ETAPA</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @forelse ($documentos as $documento)
                        <tr>
                            <td> {{ $documento->id }} </td>
                            <td> {{ $documento->nombre }}</td>
                            <td> {{ $documento->etapa}} </td>
                            <td> {{ $documento->estado ? 'Habilidato' : 'Deshabilitado'}} </td>
                            <td>
                                <a type="button" class="btn btn-sm btn-primary mb-1 w-100" 
                                    href=" {{ route('AdminPracticas.editarTipoDocumento',['tipo_documento'=>$documento->id]) }}">
                                    Modificar
                                </a>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
        </div>
        <div class="d-flex justify-content-center">
            {{$documentos->links()}}
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
    var activo = document.getElementById("Menu_Documentos");
    activo.classList.add("active");
    activo = document.getElementById("Doc_Ver");
    activo.classList.add("active");
  </script>
@endsection