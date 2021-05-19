@extends('Pantallas_Admin_Practicas_Visitas.navbar_Val2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estiloVal.css')}}">
@endsection

@section('content')
<H1>DATOS DE LA VISITA</H1>
<hr><hr><br>
<h3>Solicitud No:12</h3>
				<p><strong>Solicitante:</strong>  Marlene Jiménez Macías <br>
				<strong>Grupo:</strong> 2AM24 <br>
				<strong>Número de alumnos:</strong> 40 <br>
				<strong>Empresa:</strong> Yakult <br>
				<strong>Dirección:</strong>  Av. División del Nte. No 1419, Sta Cruz Atoyac, Benito Juárez, 03310 Ciudad de México, CDMX <br>
				<strong>Fecha de visita:</strong> 21/04/2021 <br>

</p>
<h1>DOCUMENTOS COMPROBATORIOS</h1>
<hr><hr><br>
<div class="container">
			<table class="table">
					<thead>
							<tr>    
									<th>Documento</th>
									<th></th>
									<th></th>
							</tr>
					</thead>
                    <tbody>
                        <tr>
                            <td><a href="{{url('/Alumnos.pdf')}}" target="_blank">Lista de alumnos</td>
                            <td><label for="" class="label_b">Aprobar</label></td>
                            <td><label for="" class="label_c">Anular</label></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/Requerimientos.pdf')}}" target="_blank">Requerimientos de empresa</td>
                            <td><label for="" class="label_b">Aprobar</label></td>
                            <td><label for="" class="label_c">Anular</label></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/InformeVisita.pdf')}}" target="_blank">Informe Visita</a></td>
                            <td><label for="" class="label_b">Aprobar</label></td>
                            <td><label for="" class="label_c">Anular</label></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/Informe1.pdf')}}" target="_blank">Informe de visita concluida</a></td>
                            <td><label for="" class="label_b">Aprobar</label></td>
                            <td><label for="" class="label_c">Anular</label></td>
                        </tr>
                    </tbody>

</div>
        @endsection