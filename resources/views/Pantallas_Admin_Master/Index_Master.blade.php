@extends('Pantallas_Admin_Master.navbar_Admin_Master')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Master/EstiloIndex.css')}}">
@endsection

@section('content')

<h1>REGISTRO DE ADMINISTRADORES</h1>
<hr><br>
<table>
	    	<thead>
		    	<tr>
		    		<th>Administrador</th>
		    		<th>Nombre</th>
		    		<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
		    		<th>Email</th>
		    		<th>Teléfono</th>
                    
		    	</tr>
		    </thead>
		    <tbody>
			@foreach ($datos as $dato)
		    	<tr>
		    		<td data-label="Administrador">{{$dato->Tipo_rol}}</td>
		    		<td data-label="Nombre">{{$dato->nombre}}</td>
					<td data-label="Apellido Paterno">{{$dato->ap_paterno}}</td>
					<td data-label="Apellido Materno">{{$dato->ap_materno}}</td>
					<td data-label="Email">{{$dato->email}}</td>
					<td data-label="Telefono">{{$dato->telefono}}</td>
		    	</tr>
				@endforeach
               <!-- <tr>
		    		<td data-label="Administrador">Servicio</td>
		    		<td data-label="Nombre">Julio</td>
					<td data-label="Apellido">Salas</td>
					<td data-label="Email">julio@ipn.mx</td>
					<td data-label="Telefono">5587863254</td>
                    <td><a href="#" class="label_b">Borrar</a></td>
		    	</tr>
                <tr>
		    		<td data-label="Administrador">Becas</td>
		    		<td data-label="Nombre">Beatriz</td>
					<td data-label="Apellido">Guerrero</td>
					<td data-label="Email">betty@ipn.mx</td>
					<td data-label="Telefono">5531548790</td>
                    <td><a href="#" class="label_b">Borrar</a></td>
		    	</tr> -->
		    </tbody>
	    </table>
        @endsection