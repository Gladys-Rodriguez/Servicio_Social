@extends('Pantallas_Admin_Becas.navbar_Validacion_Alumno_Becas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/estiloMiBeca.css')}}">
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/font-awesome.css')}}">    
@endsection
@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  
<script src="{{asset('js/Pantallas_Alumno_Becas/MiBeca.js')}}"></script>
<script type="text/javascript"> 
     function cambiar(){
    var pdrs = document.getElementById('file-upload').files[0].name;
    document.getElementById('info').innerHTML = pdrs;
     }   
     function cambiar1(){
    var pdrs = document.getElementById('file-upload1').files[0].name;
    document.getElementById('info1').innerHTML = pdrs;
     }   
     function cambiar2(){
    var pdrs = document.getElementById('file-upload2').files[0].name;
    document.getElementById('info2').innerHTML = pdrs;
     } 
     function cambiar3(){
    var pdrs = document.getElementById('file-upload3').files[0].name;
    document.getElementById('info3').innerHTML = pdrs;
     } 
     function cambiar4(){
    var pdrs = document.getElementById('file-upload4').files[0].name;
    document.getElementById('info4').innerHTML = pdrs;
     } 
     function cambiar5(){
    var pdrs = document.getElementById('file-upload5').files[0].name;
    document.getElementById('info5').innerHTML = pdrs;
     } 
   </script>

<form action="/SB1/{{$datos->id}}" method="POST">
@csrf    
<div class="wrap">
        <ul class="tabs">
            <li><a href="#tab1"><span class="fas fa-user"></span><span class="tab-text">Personales</span></a></li>
            <li><a href="#tab2"><span class="fas fa-address-book"></span><span class="tab-text">Dirección</span></a></li>
            <li><a href="#tab3"><span class="fas fa-money-check"></span><span class="tab-text">Aspirante a</span ></a></li>
            <li><a href="#tab4"><span class="fas fa-file-upload"></span><span class="tab-text">Acciones</span ></a></li>
        </ul>
        <div class="secciones">
           <article id="tab1">
           @foreach ($nuevo as $new)
                <h1>Datos Personales</h1>   
                <p>Nombre: {{$new->fullname}} </p>
                <p>Email: {{$new->email}}</p>
                <p>Teléfono: {{$new->telefono}}</p>
                <p>Celular: {{$new->celular}}</p>   
                <p>Semestre: {{$new->semestre}}</p>
                <p>Carrera: {{$new->carrera}}</p>
                <p>Turno: {{$new->turno}}</p>
                <p>Grupo: {{$new->grupo}}</p>       
           </article> 
           <article id="tab2">
                <h1>Dirección</h1>
                <p>Calle: {{$new->calle}}</p>
                <p>Número Interior: {{$new->num_int}}</p>
                <p>Número exterior: {{$new->num_ext}}</p>
                <p>Colonia: {{$new->colonia}}</p> 
                <P>C.P: {{$new->cp}}</P>
                <p>Delegación/Municipio: {{$new->alcaldia}}</p>
                <p>Estado: {{$new->ciudad}}</p>   
                            
           </article> 
           <article id="tab3">
           <h1>Beca Solicitada</h1>
                <p>Nombre: {{$new->Nombre_beca}}</p>
                <p>Fecha inicio: {{$new->Fecha_Inicio}}</p>
                <p>Fecha Fin: {{$new->Fecha_Fin}}</p>
                <p>Monto: ${{$new->monto}}</p>
           @endforeach 
           
    </article>
    <article id="tab4">
<table class="table">
					<caption>DOCUMENTOS PARA APROBACIÓN</caption>
					<thead>
							<tr>    
									<th>Documento</th>
									<th>Estado</th>
									<th>Observaciones</th>
									<th></th>
									<th></th>
							</tr>
					</thead>
					<tbody>
					@foreach($doc as $documento)
                    @if($documento->tipo_documento_id > 1)
							<tr>
							<form action="/Validacion3/{{$documento->id}}" method="POST">
							<input type="hidden" name="_method" value="PUT">
                            <td data-label="Documento">{{$documento->nombre}}</td>
							<td data-label="Estado">@if($documento->validacion==1) Aceptado @elseif($documento->validacion==2) Rechazado @else Sin validar @endif</td>
							@csrf	
							<td><textarea name="observaciones" placeholder="Observaciones:" id="" value="" cols="50" rows="4">{{$documento->observaciones}}</textarea></td>	
							<td data-label=""><a href=" @php echo \Illuminate\Support\Facades\Storage::url($documento->ruta) @endphp"
                                    class="boton_chido" target="_blank">
                                    VER
                             </a></td>
							<td><input class="form-check-input" type="radio" value="1" name="validacion" id="flexRadioDefault1" checked>
  <label class="" for="flexRadioDefault1">
    Aceptar
  </label>
  <input class="form-check-input" type="radio" value="2" name="validacion" id="flexRadioDefault2">
  <label class="" for="flexRadioDefault2">
    Rechazar
  </label><br>
  <button type="submit">Enviar</button>
</td>	</form>
							</tr>
                            @endif
							@endforeach
                            </tbody>

        @endsection

