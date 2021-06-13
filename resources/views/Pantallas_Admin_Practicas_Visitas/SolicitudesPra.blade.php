@extends('Pantallas_Admin_Practicas_Visitas.navbar_Solicitudes_Practicas_Visitas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
@endsection

@section('content')
<form action="/SolicitudesPra1/{{$datos->id}}" method="POST">
@csrf
@foreach($nuevo as $new)
<div>
<h1>Detalles de solicitud</h1>
<hr>
<hr>
<br>
<label class="label-sol">Número de solicitud: {{$new->id}}</label><br>
<label class="label-sol">Solicita: {{$new->fullname}}</label><br>
<label class="label-sol">Matricula: {{$new->matricula}}</label><br>
<label class="label-sol">Email: {{$new->email}}</label><br>
<label class="label-sol">Nombre de empresa: {{$new->empresaN}}</label><br>
<label class="label-sol">Dirección de la empresa: {{$new->fulldir}}</label><br>
<label class="label-sol">Secuencia: {{$new->secuencia}}</label><br>
<label class="label-sol">Carrera: {{$new->carrera}}</label><br>
<label class="label-sol">Número de alumnos: {{$new->cantidad_alumnos}}</label><br>
<label class="label-sol">Fecha de visita: {{$new->fecha_visita}}</label><br>
<hr><hr><hr><br>
<h1>Acciones</h1><br>
<input type="hidden" name="_method" value="PUT">
<div class="form-check">
  <input class="form-check-input" type="radio" value="1" name="validacion" id="flexRadioDefault1" checked>
  <label class="label-sol" for="flexRadioDefault1">
    Aceptar Solicitud
  </label>
  <input class="form-check-input" type="radio" value="2" name="validacion" id="flexRadioDefault2">
  <label class="label-sol" for="flexRadioDefault2">
    Rechazar Solicitud
  </label><br>
  <!--<textarea name="observaciones" placeholder="Observaciones:" id="" cols="50" rows="10"></textarea> -->
  <button type="submit">Enviar</button>
         
</div>
</form>
@endforeach
	
        @endsection