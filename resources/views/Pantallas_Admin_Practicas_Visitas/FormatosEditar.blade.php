@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')


@section('content')

<section class="section-main">
    <h1> Editar Formato </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Editar <div class="d-inline text-warning"> <strong>Formato </strong></div> </div>

        <form action="{{ route('AdminPracticas.actualizarFormato', ['visita_formato' => $visita_formato]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            <label for="nombre"class="form-label" >Nombre Documento: </label>
            <input type="text" name="nombre" id="nombre" class="form-control"  value=" {{ $visita_formato->nombre ?? '' }} ">
            @if ($errors->has('nombre'))
                <div class="alert alert-warning" role="alert"> {{ $errors->first('nombre' )}} </div>
            @endif
            <br />
        
            <label for="tipo"class="form-label" >Tipo Formato: </label>
            <select name="tipo" id="tipo" class="form-select" >
                <option value="Plantilla" {{ isset($visita_formato->tipo) && "Plantilla" === $visita_formato->tipo ? 'selected' : '' }}> Plantilla</option>
                <option value="Ejemplo" {{ isset($visita_formato->tipo) && "Ejemplo" === $visita_formato->tipo ? 'selected' : '' }}> Llenado de Ejemplo</option>
                <option value="Calendario" {{ isset($visita_formato->tipo) && "Calendario" === $visita_formato->tipo ? 'selected' : '' }}> Calendario Visitas</option>
            </select>
            <br />
        
            <label for="estado" class="form-label">Estado: </label>
            <select name="estado" id="estado" class="form-select" >
                <option value="1" {{ isset($visita_formato->estado) && 1 === $visita_formato->estado ? 'selected' : '' }}> Visible</option>
                <option value="0" {{ isset($visita_formato->estado) && 0 === $visita_formato->estado ? 'selected' : '' }}> Oculto</option>
            </select>
            <br />
        
            <label for="ruta" class="form-label">Documento:</label>
            <input name="ruta" type="file" accept="application/pdf" class="form-control" >
            <br />
        
            <div class="d-flex justify-content-end"> 
                <a role="button" class="btn btn-danger text-end mx-2" href="{{ URL::previous()}}">Cancelar</a>
                <button type="submit" class="btn btn-light" >Actualizar Documento </button>
            </div>
            @csrf
        </form>
        
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
  </script>
@endsection