
@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1> Mis Datos </h1>
</section>

<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border rounded text-white">
        <div class="display-5 mb-4" >Mis Datos </div>
        <h2> Editar Formato </h2>

        <form action="{{ route('adminVisitas.actualizarFormato', ['visitaFormato' => $visitaFormato]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            <label for="nombre">Nombre Documento: </label>
            <input type="text" name="nombre" id="nombre" value=" {{ $visitaFormato->nombre ?? '' }} ">
            @if ($errors->has('nombre'))
                <div class="alert alert-warning" role="alert"> {{ $errors->first('nombre' )}} </div>
            @endif
            <br />
        
            <label for="tipo">Tipo Formato: </label>
            <select name="tipo" id="tipo">
                <option value="Plantilla" {{ isset($visitaFormato->tipo) && "Plantilla" === $visitaFormato->tipo ? 'selected' : '' }}> Plantilla</option>
                <option value="Ejemplo" {{ isset($visitaFormato->tipo) && "Ejemplo" === $visitaFormato->tipo ? 'selected' : '' }}> Llenado de Ejemplo</option>
            </select>
            <br />
        
            <label for="estado">Estado: </label>
            <select name="estado" id="estado">
                <option value="1" {{ isset($visitaFormato->estado) && 1 === $visitaFormato->estado ? 'selected' : '' }}> Visible</option>
                <option value="0" {{ isset($visitaFormato->estado) && 0 === $visitaFormato->estado ? 'selected' : '' }}> Oculto</option>
            </select>
            <br />
        
            <label for="ruta">Documento:</label>
            <input name="ruta" type="file" accept="application/pdf">
            <br />
        
            <button type="submit">Actualizar Documento</button>
            @csrf
        </form>
        
    </div>
</div>
@endsection



