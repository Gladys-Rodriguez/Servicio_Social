
@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Subir Formato de Visita')

@section('content')

<section class="section-main">
    <h1> Subir Formato de Visita Escolar  </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Registro de <div class="d-inline text-warning"> <strong>Formato de Visita Escolar </strong></div></div>

        <form action=" {{route('AdminPracticas.guardarFormato')}} " method="POST" enctype="multipart/form-data">
            <label for="nombre" class="form-label">Nombre Documento: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" >
            <br />
        
            <label for="tipo"class="form-label" >Tipo de Formato: </label>
            <select name="tipo" id="tipo" class="form-select">
                <option value="Plantilla">Plantilla</option>
                <option value="Ejemplo">Llenado de Ejemplo</option>
                <option value="Calendario">Calendario Visitas</option>
            </select>
            <br />
        
            <label for="estado"class="form-label" >Estado: </label>
            <select name="estado" id="estado"class="form-select" >
                <option value="1">Visible</option>
                <option value="0">Oculto</option>
            </select>
            <br />
        
            <label for="ruta" class="form-label">Documento:</label>
            <input name="ruta" type="file" accept="application/pdf"class="form-control" >
            <br />
        
            <div class="d-flex justify-content-end"> 
                <button type="submit" class="btn btn-light" >Subir Documento</button>
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
    activo = document.getElementById("Formato_Registrar");
    activo.classList.add("active");
  </script>
@endsection
