<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Layout_Alumno/Layout_Alumno.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    @yield('css')

  </head>
  <body>

    <header>
      <a href="#" class="brand">APOYOS EDUCATIVOS</a>
      <div class="menu">

        <div class="btn" id="bot">
          <i class="fas fa-times close-btn"></i>
        </div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox" id="btn">

        <ul>
            <li><a href="#">Home</a></li>
            <li>
               <label for="btn-1" class="show">Servicio Social +</label>
               <a href="#">Servicio Social</a>
               <input type="checkbox" id="btn-1">
               <ul>
                  <li><a href="#">Registro</a></li>
                  <li><a href="#">NuevoRegistro</a></li>

               </ul>
            </li>
      </div>
      <div class="btn" >
        <i class="fas fa-bars menu-btn"></i>

      </div>


<!--<nav>
         <div class="logo">
            CodingNepal
         </div>
         <label for="btn" class="icon">
         <span class="fa fa-bars"></span>
         </label>
         <input type="checkbox" id="btn">
         <ul>
            <li><a href="#">Home</a></li>
            <li>
               <label for="btn-1" class="show">Features +</label>
               <a href="#">Features</a>
               <input type="checkbox" id="btn-1">
               <ul>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Elements</a></li>
                  <li><a href="#">Icons</a></li>
               </ul>
            </li>
            <li>
               <label for="btn-2" class="show">Services +</label>
               <a href="#">Services</a>
               <input type="checkbox" id="btn-2">
               <ul>
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">App Design</a></li>
                  <li>
                     <label for="btn-3" class="show">More +</label>
                     <a href="#">More <span class="fa fa-plus"></span></a>
                     <input type="checkbox" id="btn-3">
                     <ul>
                        <li><a href="#">Submenu-1</a></li>
                        <li><a href="#">Submenu-2</a></li>
                        <li><a href="#">Submenu-3</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
         </ul>
      </nav> -->






    </header>

    <section class="section-main">
      <h1>Bienvenido Alumno </h1>
    </section>
    <section class="section-two">
 <!-- AQUI EMPIEZA CONTENIDO; -->
      @yield('content')

    </section>





    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
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


    $(document).ready(function(){
          //jquery for toggle sub menus
          $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
          });
        });

    </script>


    @yield('script')

  </body>
</html>
