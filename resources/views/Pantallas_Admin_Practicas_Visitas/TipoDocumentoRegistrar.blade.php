@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('css')
@endsection

@section('content')

    <section class="section-main">
        <h1>Registro de Documentación Requerida</h1>
    </section>

    <div class="container-fluid bg-dark text-white py-5" >
        <div class="container border rounded p-5" style="min-height: 600px">
            <div class="display-4 mb-3">Registro de <div class="d-inline text-warning"> <strong>Documentos Requeridos</strong></div> </div>
            <form  action=" {{route('AdminPracticas.guardarTipoDocumento')}} " method="POST">
                @csrf
                <hr class="mb-4">
                <label for="nombre" class="form-label" >Nombre del Documento: </label>
                <input type="text" class="form-control" id="nombre" name="nombre" />
                <br />

                <label for="etapa" class="form-label">Etapa: </label>
                <select  class="form-select" id="etapa" name="etapa">
                    <option value="Solicitud">Documento para Solicitud</option>
                    <option value="Visita">Documento para Visita Aceptada</option>
                </select>
                <br />

                <label for="estado" class="form-label">Estado: </label>
                <select  class="form-select" id="estado" name="estado">
                    <option value="1" >Habilitado</option>
                    <option value="0" >Deshabilitado</option>
                </select>
                <br />

                <input type="hidden" name="tramite" value="Visitas Escolares">

                <div class="d-flex justify-content-end"> 
                    <a role="button" class="btn btn-danger text-end mx-2" href="#">Cancelar</a>
                    <button type="submit" class="btn btn-light" >Registrar Documento</button>
                </div>
            </form>
    </div>

@endsection

@section('script')

@endsection