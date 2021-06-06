@extends('Pantallas_Admin_Master.navbar_ConsultaAdminPra')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Master/EstiloIndex.css')}}">
@endsection

@section('content')
<h1>REGISTRO DE ADMINISTADORES DE PRÁCTICAS</h1>
<hr><br>
<table>
	    	<thead>
		    	<tr>
		    		<th>Nombre</th>
		    		<th>Email</th>
		    		<th>Teléfono</th>
					<TH>Estado</TH>
                    <TH>Cambiar Estado</TH>
					<th></th>
					<th></th>

		    	</tr>
		    </thead>
		    <tbody>
			@foreach ($datos as $dato)
		    	<tr> 
		    		<td data-label="Nombre">{{$dato->fullname}}</td>
					<td data-label="Email">{{$dato->email}}</td>
					<td data-label="Telefono">{{$dato->telefono}}</td>
					<td data-label="Estado">@if($dato->estado==1) Activo @else Inactivo @endif</td>
                    <td><a class="boton_personalizado" href="/EditarAdminForm/{{$dato->id}}">Cambiar</a></td>
					<td><a class="boton_personalizado1" href="/EditarAdminSerDato/{{$dato->id}}">Editar</a></td>
					<td><a class="boton_personalizado2" href="/EliminarAdminSer/{{$dato->id}}">Borrar</a></td>
		    	</tr>
				@endforeach
		    </tbody>
	    </table>
        @endsection
