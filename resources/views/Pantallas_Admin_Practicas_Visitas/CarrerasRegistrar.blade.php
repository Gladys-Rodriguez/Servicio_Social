
@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Registrar Carrera')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Registrar Carrera  </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Registro de <div class="d-inline text-warning"> <strong>Carrera</strong></div></div>

        <form action=" {{route('AdminPracticas.guardarCarrera')}} " method="POST" enctype="multipart/form-data">
            <label for="nombre" class="form-label">Nombre de la Carrera: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" value=" {{old('nombre')}} ">
            @if ($errors->has('nombre'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('nombre') }}
                </div>
            @endif
            <br />
        
            <label for="estado"class="form-label" >Estado: </label>
            <select name="estado" id="estado"class="form-select" >
                <option value="1" {{ old('estado') == 1 ? 'selected' : '' }} >Activo</option>
                <option value="0" {{ old('estado') == 0 ? 'selected' : '' }}  >Deshabilitado</option>
            </select>
            @if ($errors->has('estado'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('estado') }}
                </div>
            @endif
            <br />
        
            <div class="d-flex justify-content-end"> 
                <button type="submit" class="btn btn-light" >Añadir Carrera</button>
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
    activo = document.getElementById("Carrera_Registrar");
    activo.classList.add("active");
  </script>
@endsection

