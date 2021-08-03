@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_datosPersonalesA')

@section('title', 'Datos Personales')

@section('css')
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />
<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/DatosPersonales.css')}}">

@endsection

@section('content')
<div class="container-fluid bg-dark py-5" >
    <h3>Consulta de datos personales</h3>
<div class="container">
    <!--<div id="logo" class="logo">
    <img src="/img/logo/logoSAE2.png" alt="">
  </div> -->
   <!-- <div class="CTA">

        </div> -->
  <div class="leftbox">
    <div class="nav-form">

      <a id="profile" class="active"><i class="fa fa-user"></i></a>
      <a id="payment"><i class="fas fa-map-marked-alt"></i></a>
      <a id="subscription"><i class="fas fa-graduation-cap"></i></a>
      <a id="privacy"><i class="fas fa-sign-in-alt"></i></a>
     <!-- <a id="settings"><i class="fa fa-cog"></i></a> -->


    </div>
  </div>
  <div class="rightbox">
    @foreach ($datos as $dato )
    @foreach ($direccions as $direccion)
    @foreach ($alumnos as $alumno)
    @foreach ($users as $user)

    <div class="profile">

      <h1>Personal Info</h1>
      <h2>Nombre</h2>
      <p> {{$dato-> nombre}} <!--<button class="btn">update</button>--></p>
      <h2>Apellido Paterno </h2>
      <p>{{$dato-> ap_paterno}}</p>
      <h2>Apellido Materno</h2>
      <p>{{$dato-> ap_materno}}</p>
      <h2>Telefono</h2>
      <p>{{$dato-> telefono}} <!--<button class="btn">update</button>--></p>
      <h2>Celular </h2>
      <p>{{$dato-> celular}} <!--<button class="btn">Change</button>--></p>

    </div>

    <div class="payment noshow">

      <h1> Dirección </h1>
      <h2>Ciudad</h2>
      <p>{{$direccion-> ciudad}}</p>
      <h2>Alcaldía/Municipio</h2>
      <p>{{$direccion-> alcaldia}}</p>
      <h2>Colonia</h2>
      <p>{{$direccion-> colonia}}</p>
      <h2> Calle</h2>
      <p>{{$direccion-> calle}}</p>
      <h2>Num. ext.</h2>
      <p>
        {{$direccion-> num_ext}}
      </p>
      <h2>Num. int.</h2>
      <p>{{$direccion-> num_int}} </p>
      <h2>C.P.</h2>
      <p>{{$direccion-> cp}} </p>

    </div>

    <div class="subscription noshow">

      <h1>Datos Escolares</h1>
      <h2>Carrera</h2>
      <p>{{$alumno-> carrera}} </p>
      <h2>Semestre</h2>
      <p>{{$alumno-> semestre}}</p>
      <h2>Grupo</h2>
      <p>{{$alumno-> grupo}} </p>
      <h2>Turno</h2>
      <p>{{$alumno-> turno}} </p>

    </div>

    <div class="privacy noshow">

      <h1>Datos De Usuario</h1>
      <h2>Matricula</h2>
      <p>{{$user-> id}}</p>
      <h2>E-mail</h2>
      <p>{{$user-> email}}</p>

    </div>

    @endforeach
    @endforeach
    @endforeach
    @endforeach

  </div>

  <div class="btn_editar">
    @foreach ($users as $user)
<a class="boton_personalizado" href="/EditarAlumnoForm/{{$user->id}}">Editar Datos</a></td>
@endforeach
</div>

</div>
</div>

@endsection

@section('script')
<script src="{{asset('js/Pantallas_Alumno_Servicio/DatosPersonales.js')}}"></script>

@endsection
