@extends('Pantallas_Alumno_Becas.navbar_Alumnos_MiBeca')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/estiloMiBeca.css')}}">
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/font-awesome.css')}}">    
@endsection

@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  
<script src="{{asset('js/Pantallas_Alumno_Becas/MiBeca.js')}}"></script>


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
                <p>Nombre: {{$dato->nombre}}</p>
                @endforeach
                <p>Teléfono: 5578945693</p>
                <p>Email: laura@gmail.com</p>
                <p>Semestre: 4</p>
                <p>Carrera: Contaduría</p>
                <p>Turno: M</p>
                <p>Grupo: 4CM40</p>       
           </article> 
           <article id="tab2">
                <h1>Dirección</h1>
                <p>Calle: Av Del Rosario</p>
                <p>Número Interior: 5</p>
                <p>Número exterior: 216</p>
                <p>Colonia: Olivar Del Conde</p> 
                <P>C.P: 01509</P>
                <p>Delegación/Municipio: Álvaro Obregón</p>
                <p>Estado: CDMX</p>                    
           </article> 
           <article id="tab3">
                <h1>Datos Beca</h1>
                <p>Solicitud Num:012500</p>
                <p>Beca: Institucional</p>
                <p>Monto: $4500.00</p>
                <p>Fecha de Inicio: 16/01/2021</p>
                <p>Fecha Fin: 16/12/2021</p>     
           </article> 
           <article id="tab4">
                <h1>Documentos</h1>
                <h1 class="Va">Estado</h1>
                <p>Acta de nacimiento: <input type="file" name="" id=""></p>
                <p>CURP: <input type="file" name="" id=""></p>
                <p>Constancia: <input type="file" name="" id=""></p>
                <p>Solicitud: <input type="file" name="" id=""></p>
                <p>Estudio Socioeconómico: <input type="file" name="" id=""></p>   
           </article> 
    </div>  
    </div>
        @endsection