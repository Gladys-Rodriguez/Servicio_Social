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
                <h1>Datos Personales</h1>
                <p>Nombre:</p>
                <p>Teléfono:</p>
                <p>Email:</p>
                <p>Semestre:</p>
                <p>Carrera:</p>
                <p>Turno</p>
                <p>Grupo:</p>       
           </article> 
           <article id="tab2">
                <h1>Dirección</h1>
                <p>Calle:</p>
                <p>Número Interior:</p>
                <p>Número exterior:</p>
                <p>Colonia</p> 
                <p>Delegación/Municipio:</p>
                <p>Estado:</p>                    
           </article> 
           <article id="tab3">
                <h1>Datos Beca</h1>
                <p>Solicitud Num:</p>
                <p>Beca:</p>     
           </article> 
           <article id="tab4">
                <h1>Documentos</h1>
                <p>Acta de nacimiento:</p>
                <p>CURP:</p>
                <p>Constancia:</p>
                <p>Solicitud:</p>
                <p>Estudio Socioeconómico:</p>   
           </article> 
    </div>  
    </div>
        @endsection