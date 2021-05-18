@extends('Pantallas_Admin_Practicas_Visitas.navbar_Validacion_Practicas_Visitas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
@endsection

@section('content')
<div class="container">
			<table class="table">
					<caption>VALIDACIÓN DE DOCUMENTOS DE VISITAS</caption>
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
									<td data-label="Id Solicitante">12</td>
									<td data-label="Solicitante">Marlene Jiménez Macías</td>
									<td data-label="Empresa">Yakult</td>
									<td data-label="Grupo">2AM24</td>
									<td data-label="Fecha de visita">21/04/2021</td>
									<td> <a href="{{url('/ValidacionV2')}}"" class="lbl-modal">Documentación</a></td>
							</tr>
                           
					</tbody>
			</table>
	</div>

        @endsection