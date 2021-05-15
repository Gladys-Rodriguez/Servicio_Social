@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

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
            <label>Profesor:</label>
            <input type="text" value="RODRIGUEZ PEREZ MANUEL" readonly>

            <label>Número ALumnos: </label>
            <input type="number" min=0 max=100 value="40">

            <label for="Carrera">Grupo:</label>
            <select name="carrera" id="Carrera">
                <option value="informatica">1NM10</option>
                <option value="contabilidad">1NV10</option>
                <option value="turismo">1AM14</option>
                <option value="turismo">1AV14</option>
                <option value="turismo">1TM12</option>
                <option value="turismo">1TV12</option>
            </select>

            <label>Fecha de Visita:</label>
            <input type="date">
        </div>
        
        
        
        <div class="col">
            <label>Nombre Empresa:</label>
            <input type="text"/>

            <label>Estado:</label>
            <select name="carrera" id="Carrera">
                <option value="CMDX">CDMX</option>
                <option value="EDOMEX">Estado de México</option>
            </select>

            <label>Alcaldía/Municipio:</label>
            <input type="text"/>

            <label>Calle:</label>
            <input type="text"/>

            <label>Num Exterior:</label>
            <input type="text"/>

            <label>Num Interior:</label>
            <input type="text"/>

            <label>Código Postal:</label>
            <input type="text"/>
        </div>
            <!--
            <div class="col">
                <label></label>
                <input type="text">

                <label>Organizacion</label>
                <input type="text">

                <label>Fecha de Visita</label>
                <input type="date">
            </div>
        -->


            <div class="col-all">
                <p>Documentos:</p>
                <label>Permiso</label>
                <input type="file" accept="application/pdf">
                <label>Informe Visita</label>
                <input type="file" accept="application/pdf">
            </div>
            <input type="submit" value="ENVIAR">
    </form>
</section>

@endsection