@extends('Pantallas_Admin_Practicas_Visitas.navbar_rechazadasV')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
@endsection

@section('content')
<div class="container">
			<table class="table">
					<caption>SOLICITUDES RECHAZADAS</caption>
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
							<tr>
									<td data-label="Id Solicitante">4</td>
									<td data-label="Solicitante">Juan Perez Torres</td>
									<td data-label="Empresa">Marinela</td>
									<td data-label="Grupo">3CM35</td>
									<td data-label="Fecha de visita">20/05/2021</td>
									<td><label for="btn-modal" class="lbl-modal">Aceptar</label></td>
							</tr>
                            <tr>
									<td data-label="Id Solicitante">10</td>
									<td data-label="Solicitante">Sergio Chávez Villa</td>
									<td data-label="Empresa">Bancomer</td>
									<td data-label="Grupo">4AM40</td>
									<td data-label="Fecha de visita">10/06/2021</td>
									<td><label for="btn-modal" class="lbl-modal">Aceptar</label></td>
							</tr>
					</tbody>
			</table>
	</div>

@endsection