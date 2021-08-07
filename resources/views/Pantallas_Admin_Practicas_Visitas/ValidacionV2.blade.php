@extends('Pantallas_Admin_Practicas_Visitas.navbar_Val2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estiloVal.css')}}">
@endsection

@section('content')
@forelse($nuevo as $new)
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
<hr><hr><hr>
@empty
@endforelse
<hr><hr><hr><br>



<table class="table">
					<caption>DOCUMENTOS PARA APROBACIÓN</caption>
					<thead>
							<tr>    
									<th>Documento</th>
									<th>Estado</th>
									<th>Observaciones</th>
									<th></th>
									<th></th>
							</tr>
					</thead>
					<tbody>
					@foreach($doc as $documento)
                    @if($documento->tipo_documento_id > 1)
							<tr>
							<form action="/Validacion3/{{$documento->id}}" method="POST">
							<input type="hidden" name="_method" value="PUT">
                            <td data-label="Documento">{{$documento->nombre}}</td>
							<td data-label="Estado">@if($documento->validacion==1) Aceptado @elseif($documento->validacion==2) Rechazado @else Sin validar @endif</td>
							@csrf	
							<td><textarea name="observaciones" placeholder="Observaciones:" id="" value="" cols="50" rows="4">{{$documento->observaciones}}</textarea></td>	
							<td data-label=""><a href=" @php echo \Illuminate\Support\Facades\Storage::url($documento->ruta) @endphp"
                                    class="boton_chido" target="_blank">
                                    VER
                             </a></td>
							<td><input class="form-check-input" type="radio" value="1" name="validacion" id="flexRadioDefault1" checked>
  <label class="" for="flexRadioDefault1">
    Aceptar
  </label>
  <input class="form-check-input" type="radio" value="2" name="validacion" id="flexRadioDefault2">
  <label class="" for="flexRadioDefault2">
    Rechazar
  </label><br>
  <button type="submit">Enviar</button>
</td>	</form>
							</tr>
                            @endif
							@endforeach
					</tbody>

        @endsection