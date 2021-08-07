@extends('Pantallas_Admin_Becas.navbar_Tipo_Alumno_Becas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
@endsection

@section('content')
<input type="checkbox" id="btn-modal">
	<div class="container">
			<table class="table">
					<caption>SOLICITUDES ACEPTADAS</caption>
					<thead>
							<tr>    
									<th>Id Solicitud</th>
									<th>Solicitante</th>
									<th>Email</th>
									<th>Beca Seleccionada</th>
									<th>Matricula</th>
									<th></th>
							</tr>
					</thead>
					<tbody>
                    @foreach ($datos as $dato)
							<tr>
									<td data-label="Id Solicitud">{{$dato->id}}</td>
									<td data-label="Solicitante">{{$dato->fullname}}</td>
									<td data-label="Email">{{$dato->email}}</td>
									<td data-label="Beca Seleccionada">{{$dato->Nombre_beca}}</td>
									<td data-label="Matricula">{{$dato->mat}}</td>
									<td><a class="boton_personalizado1" href="/SB/{{$dato->id}}">Ver</a></td>
							</tr>
							@endforeach
</tbody>
</table>
</div>
        @endsection