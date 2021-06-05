@extends('Pantallas_Admin_Master.navbarconsultaAlumnoM')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Master/EstiloIndex.css')}}">
@endsection

@section('content')

<h1>REGISTRO DE ALUMNOS</h1>
<hr><br>
<table>
	    	<thead>
		    	<tr>
		    		<th>Nombre</th>
		    		<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
		    		<th>Email</th>
		    		<th>Teléfono</th>
					<TH>Estado</TH>
                    <TH>Habilitar/deshabilitar</TH>

		    	</tr>
		    </thead>
		    <tbody>
			@foreach ($datos as $dato)
		    	<tr>
		    		<td data-label="Nombre">{{$dato->nombre}}</td>
					<td data-label="Apellido Paterno">{{$dato->ap_paterno}}</td>
					<td data-label="Apellido Materno">{{$dato->ap_materno}}</td>
					<td data-label="Email">{{$dato->email}}</td>
					<td data-label="Telefono">{{$dato->telefono}}</td>
					<td data-label="Estado">@if($dato->estado==1) Activo @else Inactivo @endif</td>
                    <td><a class="boton_personalizado" href="/EditarAdminForm/{{$dato->id}}">Habilitar/deshabilitar</a></td>


		    	</tr>
				@endforeach

		    </tbody>
	    </table>
        @endsection
