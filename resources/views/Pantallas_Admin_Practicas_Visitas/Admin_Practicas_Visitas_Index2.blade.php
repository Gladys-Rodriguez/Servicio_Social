@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Index Admin Practicas y Visitas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/Admin_Practicas_Visitas2.css')}}">
@endsection

@section('content')
<section class="section-main">
  <h1>ADMINISTRACIÓN DE PRÁCTICAS Y VISITAS
  <br> Usuario con Núm de Empleado: {{ Auth::user()->id}}
  </h1>
</section>

<div class="container-fluid bg-dark py-5" >
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Módulo de administración de prácticas y visitas"</h3>
      </div>
    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->

        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
        <div class="slide">
        <img src="{{ asset('img/c_visitas/visita4.jpg')}}">
        </div>

        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>

        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">


      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 4000);
    </script>

     </div>
</div>
</div>
@endsection

@section('script')
  <script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("home_practicas");
    activo.classList.add("active");
  </script>
@endsection

