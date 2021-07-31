@extends('Pantallas_Admin_Practicas_Visitas.navbar_Val2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estiloVal.css')}}">
@endsection

@section('content')
<form action="/SolicitudesPra1/{{$datos->id}}" method="POST">
@csrf
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
	
<h1>DOCUMENTOS COMPROBATORIOS</h1>
<hr><hr><br>
<div class="container">
			<table class="table">
					<thead>
							<tr>    
									<th>Documento</th>
									<th>Observaciones</th>
                                    <th></th>
									<th></th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
                            <td><a href="{{url('/Alumnos.pdf')}}" target="_blank">Lista de alumnos</td>
                            <td><textarea name="" id="" placeholder="Ingresa tus observaciones:" cols="35" rows="2"></textarea></td>
                            <td><label for="" class="label_b">Aprobar</label></td>
                            <td><label for="" class="label_c">Rechazar</label></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/Requerimientos.pdf')}}" target="_blank">Requerimientos de empresa</td>
                            <td><textarea name="" id="" placeholder="Ingresa tus observaciones:" cols="35" rows="2"></textarea></td>
                            <td><label for="" class="label_b">Aprobar</label></td>
                            <td><label for="" class="label_c">Rechazar</label></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/InformeVisita.pdf')}}" target="_blank">Informe Visita</a></td>
                            <td><textarea name="" id="" placeholder="Ingresa tus observaciones:" cols="35" rows="2"></textarea></td>
                            <td><label for="" class="label_b">Aprobar</label></td>
                            <td><label for="" class="label_c">Rechazar</label></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/Informe1.pdf')}}" target="_blank">Informe de visita concluida</a></td>
                            <td><textarea name="" id="" placeholder="Ingresa tus observaciones:" cols="35" rows="2"></textarea></td>
                            <td><label for="" class="label_b">Aprobar</label></td>
                            <td><label for="" class="label_c">Rechazar</label></td>
                        </tr>
                    </tbody>

</div>
        @endsection