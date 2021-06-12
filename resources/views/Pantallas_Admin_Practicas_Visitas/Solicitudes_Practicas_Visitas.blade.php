@extends('Pantallas_Admin_Practicas_Visitas.navbar_Solicitudes_Practicas_Visitas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
@endsection

@section('content')
<input type="checkbox" id="btn-modal">
	<div class="container">
			<table class="table">
					<caption>SOLICITUDES PARA APROBACIÓN</caption>
					<thead>
							<tr>    
									<th>Id Solicitud</th>
									<th>Solicitante</th>
									<th>Empresa</th>
									<th>Grupo</th>
									<th>Fecha de visita</th>
									<th></th>
							</tr>
					</thead>
					<tbody>
					@foreach ($datos as $dato)
							<tr>
									<td data-label="Id Solicitante">{{$dato->id_solicitud}}</td>
									<td data-label="Solicitante">{{$dato->fullname}}</td>
									<td data-label="Empresa">{{$dato->empresaN}}</td>
									<td data-label="Grupo">{{$dato->grupo}}</td>
									<td data-label="Fecha de visita">{{$dato->fechaVisita}}</td>
									<td><label for="btn-modal" class="lbl-modal">	Ver Más</label></td>
							</tr>
							@endforeach
					</tbody>
			</table>
	</div>
	<div class="modal">
		<div class="contenedor">
			<header>Solicitud</header>
			<label for="btn-modal">X</label>
			<div class="contenido">
				<h3>Solicitud No: <!--{{$dato->empresaN}}--></h3>
				<p><strong>Solicitante:</strong>  Regina Alejandre Sánchez <br>
				<strong>Grupo:</strong> 2CM20 <br>
				<strong>Número de alumnos:</strong> 50 <br>
				<strong>Empresa:</strong> Bimbo <br>
				<strong>Dirección:</strong> Malacates No. 15 Col Sta. María Insurgentes Delegación Cuauhtémoc, C.P. 06430 Ciudad de México <br>
				<strong>Fecha de visita:</strong> 19/05/2021 <br>
				<strong>Documentos: </strong></p>
				<a href="#" class="label_a">Solicitud de Visita</a>
				<hr><hr><hr>
				<textarea name="" placeholder="Observaciones:" id="" cols="50" rows="10"></textarea>
				<a href="#" class="label_c">Rechazar</a> <a href="#" class="label_b">Aceptar</a> <br>
			</div>

		</div>
	</div>

	
        @endsection