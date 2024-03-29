
@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Registrar Grupo')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Registrar Grupo  </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Registro de <div class="d-inline text-warning"> <strong>Grupos</strong></div></div>

        <form action=" {{route('AdminPracticas.guardarGrupo')}} " method="POST" enctype="multipart/form-data">
            <label for="secuencia" class="form-label">Secuencia: </label>
            <input type="text" name="secuencia" id="secuencia" class="form-control" >
            @if ($errors->has('secuencia'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('secuencia') }}
                </div>
            @endif
            <br />
        
            <label for="carrera_id"class="form-label" >Carrera: </label>
            <select name="carrera_id" id="carrera_id" class="form-select" >
                @foreach($carreras as $id => $display)
                    <option value="{{ $id }}" > {{ $display }}</option>
                @endforeach
            </select>
            @if ($errors->has('carrera_id'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('carrera_id') }}
                </div>
            @endif
            <br />
            
            <label for="estado"class="form-label" >Estado: </label>
            <select name="estado" id="estado"class="form-select" >
                <option value="1" {{ old('estado') == 1 ? 'selected' : '' }} >Activo</option>
                <option value="0" {{ old('estado') == 0 ? 'selected' : '' }} >Deshabilitado</option>
            </select>
            @if ($errors->has('estado'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('estado') }}
                </div>
            @endif
            <br />
        
            <div class="d-flex justify-content-end"> 
                <button type="submit" class="btn btn-light" >Añadir Grupo</button>
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
    activo = document.getElementById("Grupo_Registrar");
    activo.classList.add("active");
  </script>
@endsection