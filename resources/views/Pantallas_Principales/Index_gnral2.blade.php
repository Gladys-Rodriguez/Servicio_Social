<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Layout_Alumno/Layout_Alumno.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>

    <header>
      <a href="#" class="brand">APOYOS EDUCATIVOS</a>
      <div class="menu">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        <a href="#">Home</a>
        <a href="#">Servicio Social</a>
        <a href="#">Becas</a>
    <!--    <a href="#">Blog</a>
        <a href="#">Contact</a> -->
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
    </header>


    <section class="section-main">
      <h1>Apoyos Educativos</h1>
    </section>
    <section class="section-two">
 <!-- AQUI EMPIEZA CONTENIDO; -->


    </section>


    <script type="text/javascript">
    //javascript for navigation bar effect on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle('sticky', window.scrollY > 0);
    });

    //javascript for responsive navigation sidebar menu
    var menu = document.querySelector('.menu');
    var menuBtn = document.querySelector('.menu-btn');
    var closeBtn = document.querySelector('.close-btn');

    menuBtn.addEventListener("click", () => {
      menu.classList.add('active');
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove('active');
    });
    </script>

  </body>
</html>
