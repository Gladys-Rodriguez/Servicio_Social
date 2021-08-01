@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Datos Servicio')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/DatosServicio.css')}}">

@endsection

@section('content')
<div class="titulo">
    @foreach ($busqueda as $busque )
    <h2>Inscripción al <a  target="_blank">Servicio Social</a> </h2>
    <h2>Alumno con Boleta:  <a  target="_blank">{{$boleta}}</a> </h2>

    @endforeach

</div>
<br>
<br>

<div class="container">
    <!--<div id="logo" class="logo">
    <img src="/img/logo/logoSAE2.png" alt="">
  </div> -->
   <!-- <div class="CTA">

        </div> -->
  <div class="leftbox">
    <div class="nav-form">

      <a id="profile" class="active"><i class="fa fa-user-circle" aria-hidden="true"></i></i></a>
      <a id="payment"><i class="fa fa-building" aria-hidden="true"></i></a>
    <!--  <a id="subscription"><i class="fas fa-graduation-cap"></i></a> -->
      <a id="privacy"><i class="fa fa-book" aria-hidden="true"></i></a>
     <!-- <a id="settings"><i class="fa fa-cog"></i></a> -->


    </div>
  </div>
  <div class="rightbox">

@foreach ($busqueda as $busque )
    <div class="profile">

    <h1>Datos de Responsable Directo</h1>
        <h2>Nombre(s)</h2>
            <p>{{$busque->nom_responsable}}</p>
        <h2>Apellido Paterno </h2>
            <p>{{$busque->ap_responsable}}</p>
        <h2>Apellido Materno</h2>
            <p>{{$busque->am_responsable}}</p>
        <h2>Telefono</h2>
            <p>{{$busque->telefono}} <!--<button class="btn">update</button>--></p>
        <h2>E-mail del Responsable </h2>
            <p> {{$busque->email_responsable}}<!--<button class="btn">Change</button>--></p>

    </div>

    <div class="payment noshow">

    <h1> Datos de la Dependencia </h1>
        <h2>Nombre de la dependencia</h2>
            <p>{{$busque->nombre_depen}}</p>
        <h2>Ciudad</h2>
            <p>{{$busque->ciudad}}</p>
        <h2>Alcaldía/Municipio</h2>
            <p>{{$busque->alcaldia}}</p>
        <h2>Colonia</h2>
            <p>{{$busque->colonia}}</p>
        <h2> Calle</h2>
            <p>{{$busque->calle}}</p>
        <h2>Num. ext.</h2>
            <p>{{$busque->num_ext}}</p>
        <h2>Num. int.</h2>
            <p>{{$busque->num_int}}</p>
        <h2>C.P.</h2>
            <p>{{$busque->cp}}</p>
    </div>

   <!-- <div class="subscription noshow">

      <h1>Nombre de la dependencia</h1>
      <h2>Carrera</h2>

      <h2>Semestre</h2>

      <h2>Grupo</h2>

      <h2>Turno</h2>

    </div>-->

    <div class="privacy noshow">

        <h1>Datos De Servicio</h1>
            <h2>No. De Registro </h2>
                <p>{{$busque->No_registro}}</p>
            <h2>Fecha de Inicio</h2>
                <p>{{$busque->fecha_inicio}}</p>
            <h2>Fecha de Término</h2>
                <p>{{$busque->fecha_termino}}</p>
            <h2>Fecha de Inscripción</h2>
                <p>{{$busque->fecha_inscripcion}}</p>
    </div>


@endforeach
  </div>

  <div class="btn_registrar">
    @foreach ($busqueda as $busque )
    <a class="boton_personalizado" href="{{route('Registro de Fechas.index', $busque->id_usuarios)}}">Control de Fechas</a>
    @endforeach
</div>

<div class="btn_checar">
    @foreach ($busqueda as $busque )
    <a class="boton_personalizado" href="{{route('Expediente.docs', $busque->id_usuarios)}}">Control de expediente</a>
    @endforeach
</div>
    <div class="btn_editar">
    @foreach ($busqueda as $busque )
    <a class="boton_personalizado" href="{{route('Expediente_Reportes.docs', $busque->id_usuarios)}}">Validación de Reportes</a>
    @endforeach

    </div>





</div>


@endsection

@section('script')
<script src="{{asset('js/Pantallas_Admin_Servicio/DatosServicio.js')}}"></script>

@endsection
