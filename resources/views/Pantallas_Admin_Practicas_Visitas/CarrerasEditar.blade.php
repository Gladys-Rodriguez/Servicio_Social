
@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Editar Carrera')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Editar Carrera  </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Editar <div class="d-inline text-warning"> <strong>Carrera</strong></div></div>

        <form action=" {{ route('AdminPracticas.actualizarCarrera', ['carrera' => $carrera]) }} " method="POST" enctype="multipart/form-data">
            @method('PUT')
            <label for="nombre" class="form-label">Nombre de la Carrera: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" value=" {{ $carrera->nombre ?? '' }}" >
            <br />
        
            <label for="estado"class="form-label" >Estado: </label>
            <select name="estado" id="estado"class="form-select" >
                <option value="1" {{ isset($carrera->estado) && 1 === $carrera->estado ? 'selected' : '' }}  >Activo</option>
                <option value="0" {{ isset($carrera->estado) && 0 === $carrera->estado ? 'selected' : '' }} >Deshabilitado</option>
            </select>
            <br />
        
            <div class="d-flex justify-content-end"> 
                <a class="btn btn-danger mx-3" href=" {{route('AdminPracticas.indexCarrera')}} " >Regresar</a>
                <button type="submit" class="btn btn-light" >Editar Carrera</button>
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
    var activo = document.getElementById("Menu_Administracion");
    activo.classList.add("active");
    activo = document.getElementById("Carrera_Ver");
    activo.classList.add("active");
  </script>
@endsection

