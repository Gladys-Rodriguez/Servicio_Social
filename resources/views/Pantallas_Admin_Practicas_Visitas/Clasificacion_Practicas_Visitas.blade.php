@extends('Pantallas_Admin_Practicas_Visitas.navbar_Clasificacion_Practicas_Visitas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
@endsection

@section('content')
<input type="checkbox" id="btn-modal">
	<div class="container">
			<table class="table">
					<caption>Consolas</caption>
					<thead>
							<tr>
									<th>Consola</th>
									<th>Precio</th>
									<th>Ventas</th>
									<th>Fecha de lanzamiento</th>
									<th></th>
							</tr>
					</thead>
					<tbody>
							<tr>
									<td data-label="Consola">Play Station 3</td>
									<td data-label="Precio">$8000</td>
									<td data-label="Ventas">800000</td>
									<td data-label="Fecha de lanzamiento">10/01/2012</td>
									<td></td>
							</tr>
							<tr>
									<td data-label="Consola">Play Station 3</td>
									<td data-label="Precio">$8000</td>
									<td data-label="Ventas">800000</td>
									<td data-label="Fecha de lanzamiento">10/01/2012</td>
									<td></td>
							</tr>
							<tr>
									<td data-label="Consola">Play Station 3</td>
									<td data-label="Precio">$8000</td>
									<td data-label="Ventas">800000</td>
									<td data-label="Fecha de lanzamiento">10/01/2012</td>
									<td><label for="btn-modal" class="lbl-modal">Ver Más</label></td>
							</tr>
					</tbody>
			</table>
	</div>

	<div class="modal">
		<div class="contenedor">
			<header>¡Bienvenidos!</header>
			<label for="btn-modal">X</label>
			<div class="contenido">
				<h3><!-- Agregar un titulo --></h3>
				<p><!-- Agregar un mensaje --></p>
			</div>
		</div>
	</div>

        @endsection