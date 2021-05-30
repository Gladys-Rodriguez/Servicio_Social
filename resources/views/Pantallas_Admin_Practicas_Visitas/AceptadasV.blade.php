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
							<tr>
									<td data-label="Id Solicitante">7</td>
									<td data-label="Solicitante">Andrea Sánchez Azuara</td>
									<td data-label="Empresa">MitLife</td>
									<td data-label="Grupo">5CV52</td>
									<td data-label="Fecha de visita">03/03/2021</td>
									<td data-label="Observaciones">Documentación completa</td>
									<td><label for="btn-modal" class="lbl-modal2">Rechazar</label></td>
							</tr>
                            <tr>
									<td data-label="Id Solicitante">15</td>
									<td data-label="Solicitante">Alejandro Rodriguez León </td>
									<td data-label="Empresa">Coca Cola</td>
									<td data-label="Grupo">6AV50</td>
									<td data-label="Fecha de visita">05/10/2021</td>
									<td data-label="Observaciones">Documentación completa</td>
									<td><label for="btn-modal" class="lbl-modal2">Rechazar</label></td>
							</tr>
					</tbody>
			</table>
	</div>

@endsection