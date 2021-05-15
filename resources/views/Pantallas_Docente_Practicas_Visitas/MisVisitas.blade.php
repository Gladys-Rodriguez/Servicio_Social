@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbar2')

@section('title')
Mis Visitas Escolares
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}">
@endsection



@section('content')

<section class="section-main">
    <h1>Mis visitas</h1>
</section>

<section class="section-dos">
    <h2>Seguimiento de Visitas Solicitadas</h2>

    <table style="width:100%">
        <thead>
            <tr>
		    <th>Id Solicitud</th>
			<th>Lugar</th>
            <th>Fecha de visita</th>
            <th>Status</th>
            <th>Acciones</th>
		</tr>
        </thead>
		
		<tr>
			<td>210</td>
			<td>Bimbo</td>
            <td>15-Abril-2021</td>
            <td>Rechazada</td>
            <td>Ver detalles</td>
		</tr>
            <td>211</td>
			<td>BBVA</td>
            <td>10-Junio-2021</td>
            <td>En espera</td>
            <td>Ver detalles</td>
		</tr>
        </tr>
            <td>212</td>
			<td>Marinela</td>
            <td>29-Mayo-2021</td>
            <td>Aceptada</td>
            <td>
                Ver detalles <br/>
                Subir Documentos
            </td>
		</tr>
	</table>

    <form class="form">
            <div class="col-all">
                <p>Documentos:</p>
                <label>Informe de Prácticas</label>
                <input type="file" accept="application/pdf" >
                <label>Listas Oficiales Firmadas</label>
                <input type="file" accept="application/pdf">
                <label>Oficio Sellado</label>
                <input type="file" accept="application/pdf">
                <label>Resumen</label>
                <input type="file"accept="application/pdf" >
                <label>Calidad de Servicio</label>
                <input type="file"accept="application/pdf" >
            </div>
            <input type="submit" value="ENVIAR">
    </form>
</section>
@endsection