@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar')

@section('title')
Solicitar Visita Escolar
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}">
@endsection



@section('content')

<section class="section-main">
    <h1>Solicitar Visita</h1>
    <form>
    </form>
</section>

<section class="section-dos">
    <h2>Solicitud de Visita o Práctica Escolar</h2>

    <form class="form">
        
            <div class="col">
                <label>No. de Práctica</label>
                <input type="text">

                <label>Organizacion</label>
                <input type="text">

                <label>Fecha de Visita</label>
                <input type="date">
            </div>

            <div class="col">
                <label>Profesor:</label>
                <input type="text" value="Dr Profesor Patricio">

                <label for="Carrera">Carrera</label>
                <select name="carrera" id="Carrera">
                    <option value="informatica">Informática</option>
                    <option value="contabilidad">Contabilidad</option>
                    <option value="turismo">Administración de Empresas Turisticas</option>
                </select>

                <label for="Semestre">Carrera</label>
                <select name="semestre" id="Semestre">
                    <option value="1er">1er</option>
                    <option value="2do">2do</option>
                    <option value="3er">3er</option>
                    <option value="4to">4to</option>
                    <option value="5to">5to</option>
                    <option value="6to">6to</option>
                </select>
            </div>

            <div class="col-all">
                <p>Documentos:</p>
                <label>Permiso</label>
                <input type="file">
                <label>Informe Visita</label>
                <input type="file">
            </div>
            <input type="submit" value="ENVIAR">
    </form>
</section>

@endsection