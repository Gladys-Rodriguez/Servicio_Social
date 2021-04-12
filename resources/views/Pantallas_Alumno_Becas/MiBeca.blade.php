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
            <li><a href="#tab4"><span class="fas fa-file-upload"></span><span class="tab-text">Documentos</span ></a></li>
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
                <p>Estado: CDMX</p>                  
           </article> 
           <article id="tab3">
           @if($dato->id_direcciones=='2')
           <p>No tienes beca asignada</p>
           @else
                <h1>Datos Beca</h1>
                <p>Solicitud Num:012500</p>
                <p>Beca: Institucional</p>
                <p>Monto: $4500.00</p>
                <p>Fecha de Inicio: 16/01/2021</p>
                <p>Fecha Fin: 16/12/2021</p> 
          @endif
          @endforeach      
           </article> 
           <article id="tab4">
                <h1>Documentos</h1> 
                <div class="container">
                    <table class="table">
                         <thead>
                              <tr>
                                   <th>Documento</th>
                                   <th></th>
                                   <th></th>
                                   <th>Estado</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <td data-label="Documentos">Acta de nacimiento</td>
                                   <td data-label="">
                                        <form action="" id="1">
                                        <label for="file-upload" class="subir">
                                             <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                                        </label>
                                        <input id="file-upload" onchange="cambiar()" type="file" style='display: none;'/>
                                        <div id="info"></div>
                                   </td>
                                   <td data-label=""><input type="button" value="Enviar" class="Btn_chido"></td></td>
                                   </form>
                                   <td data-label="Estado">Rechazado</td>
                              </tr>
                              <tr>
                                   <td data-label="Documentos">CURP</td>
                                   <td data-label="">
                                   <form action="" id="2"></form>
                                        <label for="file-upload1" class="subir">
                                             <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                                        </label>
                                        <input id="file-upload1" onchange="cambiar1()" type="file" style='display: none;'/>
                                        <div id="info1"></div>
                                   </td>
                                   <td data-label=""><input type="button" value="Enviar" class="Btn_chido"></td>
                                   </form>
                                   <td data-label="Estado">Rechazado</td>
                              </tr>
                              <tr>
                                   <td data-label="Documentos">Constancia</td>
                                   <td data-label="">
                                        <form action="" id="3">
                                        <label for="file-upload2" class="subir">
                                             <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                                        </label>
                                        <input id="file-upload2" onchange="cambiar2()" type="file" style='display: none;'/>
                                        <div id="info2"></div>
                                   </td>
                                   <td data-label=""><input type="button" value="Enviar" class="Btn_chido"></td></td>
                                   </form>
                                   <td data-label="Estado">Rechazado</td>
                              </tr>
                              <tr>
                                   <td data-label="Documentos">No. IMSS</td>
                                   <td data-label="">
                                        <form action="" id="4">
                                        <label for="file-upload3" class="subir">
                                             <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                                        </label>
                                        <input id="file-upload3" onchange="cambiar3()" type="file" style='display: none;'/>
                                        <div id="info3"></div>
                                   </td>
                                   <td data-label=""><input type="button" value="Enviar" class="Btn_chido"></td></td>
                                   </form>
                                   <td data-label="Estado">Rechazado</td>
                              </tr>
                              <tr>
                                   <td data-label="Documentos">Estudio Socioeconómico</td>
                                   <td data-label="">
                                        <form action="" id="5">
                                        <label for="file-upload4" class="subir">
                                             <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                                        </label>
                                        <input id="file-upload4" onchange="cambiar4()" type="file" style='display: none;'/>
                                        <div id="info4"></div>
                                   </td>
                                   <td data-label=""><input type="button" value="Enviar" class="Btn_chido"></td></td>
                                   </form>
                                   <td data-label="Estado">Rechazado</td>
                              </tr>
                              <tr>
                                   <td data-label="Documentos">Solicitud</td>
                                   <td data-label="">
                                        <form action="" id="6"></form>
                                        <label for="file-upload5" class="subir">
                                             <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                                        </label>
                                        <input id="file-upload5" onchange="cambiar5()" type="file" style='display: none;'/>
                                        <div id="info5"></div>
                                   </td>
                                   <td data-label=""><input type="button" value="Enviar" class="Btn_chido"></td></td>
                                   </form>
                                   <td data-label="Estado">Rechazado</td>
                               </tr>
                         </tbody>
                    </table>
                </div>
           </article> 
        </div>  
    </div>
@endsection