
@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Editar Grupo')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Editar Grupo  </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Editar <div class="d-inline text-warning"> <strong>Grupo</strong></div></div>

        <form action=" {{route('AdminPracticas.actualizarGrupo', ['grupo'=>$grupo])}} " method="POST" enctype="multipart/form-data">
            @method('PUT')
            <label for="secuencia" class="form-label">Secuencia: </label>
            <input type="text" name="secuencia" id="secuencia" class="form-control" value=" {{ $grupo->secuencia ?? '' }}">
            <br />
        
            <label for="carrera_id"class="form-label" >Carrera: </label>
            <select name="carrera_id" id="carrera_id" class="form-select" >
                @foreach($carreras as $id => $display)
                    <option value="{{ $id }}" {{ (isset($grupo->carrera_id) && $id === $grupo->carrera_id) ? 'selected' : '' }} > {{ $display }}</option>

                @endforeach
            </select>
            
            <label for="estado"class="form-label" >Estado: </label>
            <select name="estado" id="estado"class="form-select" >
                <option value="1" {{ isset($grupo->estado) && 1 === $grupo->estado ? 'selected' : '' }}  >Activo</option>
                <option value="0" {{ isset($grupo->estado) && 0 === $grupo->estado ? 'selected' : '' }} >Deshabilitado</option>
            </select>
            <br />
        
            <div class="d-flex justify-content-end"> 
                <a class="btn btn-danger mx-3" href=" {{route('AdminPracticas.indexGrupo')}} " >Regresar</a>
                <button type="submit" class="btn btn-light" >Editar Grupo</button>
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
    activo = document.getElementById("Grupo_Ver");
    activo.classList.add("active");
  </script>
@endsection
