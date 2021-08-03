
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
        <hr class="mb-4">
        
        <div class="h2 mb-3">Datos Generales</div>

        <div class="row" >
            <div class="col-4">
                <label class="form-label">Matricula:</label>
                <input class="form-control" value=" {{ $docente->user->id }}" disabled>
                <br />
            </div>
        </div>

        <div class="row" >
            <div class="col-4">
                <label class="form-label">Nombre(s):</label>
                <input class="form-control" value=" {{ $docente->dato->nombre }}" disabled>
                <br />
            </div>
            <div class="col-4">
                <label class="form-label">Apellido Paterno:</label>
                <input class="form-control" value=" {{$docente->dato->ap_paterno }}" disabled>
                <br />
            </div>           
            <div class="col-4">
                <label class="form-label">Apellido Materno:</label>
                <input class="form-control" value=" {{ $docente->dato->ap_materno }}" disabled>
                <br />
            </div>
        </div>
        <hr class="mt-4 mb-5">

        <div class="h2 mb-3">Datos de Contacto</div>
        <div class="row" >
            <div class="col-4">
                <label class="form-label">Telefono:</label>
                <input class="form-control" value=" {{ $docente->dato->telefono }}" disabled>
                <br />
            </div>
            <div class="col-4">
                <label class="form-label">Celular:</label>
                <input class="form-control" value=" {{$docente->dato->celular }}" disabled>
                <br />
            </div>           
            <div class="col-4">
                <label class="form-label">Correo electronico:</label>
                <input class="form-control" value=" {{ $docente->user->email }}" disabled>
                <br />
            </div>
        </div>
        <hr class="mt-4 mb-5">

        <div class="h2 mb-3">Datos Escolares</div>
        <div class="row" >
            <div class="col">
                <label class="form-label">Academia:</label>
                <input class="form-control" value=" {{ $docente->academia }}" disabled>
                <br />
            </div>
        </div>

    </div>
</div>

