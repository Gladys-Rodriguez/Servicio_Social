@extends('Pantallas_Admin_Practicas_Visitas.navbar_aceptadasV')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
@endsection

@section('content')
<div class="container">
			<table class="table">
					<caption>SOLICITUDES ACEPTADAS</caption>
					<thead>
							<tr>    
									<th>Id Solicitud</th>
									<th>Solicitante</th>
									<th>Empresa</th>
									<th>Grupo</th>
									<th>Fecha de visita</th>
									<th>Observaciones</th>
									<th></th>
							</tr>
					</thead>
					<tbody>
					@foreach ($datos as $dato)
							<tr>
									<td data-label="Id Solicitante">{{$dato->id}}</td>
									<td data-label="Solicitante">{{$dato->fullname}}</td>
									<td data-label="Empresa">{{$dato->empresaN}}</td>
									<td data-label="Secuencia">{{$dato->secuencia}}</td>
									<td data-label="Fecha de visita">{{$dato->fecha_visita}}</td>
									<td data-label="Observaciones">{{$dato->observaciones}}</td>
									<td><a class="boton_personalizado1" href="/SolicitudesPra/{{$dato->id}}">Ver</a></td>
							</tr>
							@endforeach
					</tbody>
			</table>
	</div>

@endsection