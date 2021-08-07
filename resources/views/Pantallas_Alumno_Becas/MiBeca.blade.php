@extends('Pantallas_Alumno_Becas.navbar_Alumnos_MiBeca')

@section('css')
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

     
<div class="wrap">
        <ul class="tabs">
            <li><a href="#tab1"><span class="fas fa-user"></span><span class="tab-text">Personales</span></a></li>
            <li><a href="#tab2"><span class="fas fa-address-book"></span><span class="tab-text">Dirección</span></a></li>
            <li><a href="#tab3"><span class="fas fa-money-check"></span><span class="tab-text">Beca</span ></a></li>
            <li><a href="#tab4"><span class="fas fa-file-upload"></span><span class="tab-text">Solicitud</span ></a></li>
        </ul>
    <div class="secciones">
           <article id="tab1">
           @foreach ($datos as $dato)
                <h1>Datos Personales</h1>   
                <p>Nombre: {{$dato->fullname}} </p>
                <p>Email: {{$dato->email}}</p>
                <p>Teléfono: {{$dato->telefono}}</p>
                <p>Celular: {{$dato->celular}}</p>   
                <p>Semestre: {{$dato->semestre}}</p>
                <p>Carrera: {{$dato->carrera}}</p>
                <p>Turno: {{$dato->turno}}</p>
                <p>Grupo: {{$dato->grupo}}</p>       
           </article> 
           <article id="tab2">
                <h1>Dirección</h1>
                <p>Calle: {{$dato->calle}}</p>
                <p>Número Interior: {{$dato->num_int}}</p>
                <p>Número exterior: {{$dato->num_ext}}</p>
                <p>Colonia: {{$dato->colonia}}</p> 
                <P>C.P: {{$dato->cp}}</P>
                <p>Delegación/Municipio: {{$dato->alcaldia}}</p>
                <p>Estado: {{$dato->ciudad}}</p>                  
           </article> 
           @endforeach
           
           <article id="tab3">
           @foreach($sol as $soli)
           @if($soli->validacion == 0)
           <p>Solicitud en revisión <br>
           </p>   
           @elseif($soli->validacion == 1)
           <p>Beca: {{$soli->Nombre_beca}}</p>
           <p>Fecha Inicio: {{$soli->Fecha_Inicio}}</p>
           <p>Fecha Fin: {{$soli->Fecha_Fin}}</p>
           <p>Monto: ${{$soli->monto}}</p>
           @elseif($soli->validacion == 2)
           <p>Solicitud Rechazada</p>
           @else
           <p>Te invitamos a ver otras opciones</p>
           @endif
           @endforeach
           </article> 
           <article id="tab4">  
                <p>Subir documentos</p>
           @foreach($sol as $soli)
                <table class="table">
					<caption>DOCUMENTOS PARA APROBACIÓN</caption>
					<thead>
                         @if($soli->validacion == 1) 
							<tr>    
									<th>Documento</th>
									<th>Estado</th>
									<th>Observaciones</th>
									<th></th>
									<th></th>
                                             <th></th>
							</tr>
					</thead>
					<tbody>
                              <tr>
                                   <td data-label="Documento">{{$soli->nombre_doc}}</td>
                                   <td data-label="Estado">@if($soli->estado==1) Aceptado @elseif($soli->estado==2) Rechazado @else Sin validar @endif</td>
                                   <td data-label="Observaciones">{{$soli->observaciones}}</td>
                                   <td data-label=""><a href=" @php echo \Illuminate\Support\Facades\Storage::url($soli->ruta) @endphp"
                                    class="boton_chido" target="_blank">VER</a></td>
                                   <td data-label="">Editar</td>
                                   <td data-label="">Eliminar</td>
                              </tr>	
                            </tbody>
                    </table>
                @elseif($soli->validacion == 0)
                <p>Solicitud en revisión</p>
                @else  
                <h1>Selecciona la beca para la que quieras postularte</h1> 
                <form action="{{route('registroBecaB.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
               <input type="hidden" name="id_alumnos" value="{{$soli->id_alumnos}}">
               <input type="hidden" name="validacion" value="0">
                <select name="id_expediente_becas" class="form-select">
                     <option  Selected value="1">Institucional</option>
                     <option value="2">Benito Juarez</option>
                     <option value="3">Excelencia</option>
                     <option value="4">Transporte</option>
                     <option value="5">Becalos</option>
                </select>
                <button type="submit">Hacer Solicitud</button>
</form>
@endif
@endforeach
           </article> 
        </div>  
    </div>
@endsection