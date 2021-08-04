<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Layout_Alumno/Layout_Alumno2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    @yield('css')

  </head>
  <body>

    <header class="header">
      <a href="#" class="brand">APOYOS EDUCATIVOS</a>
      <a href="#" class="header__logo"></a>
        <i class='bx bx-menu header__toggle' id="header-toggle"></i>
      <nav class="nav-nav" id="nav-menu">
        <div class="nav__content bd-grid">
            <a href="" class="nav__perfil">
                <div class="nav__img">
                    <img src="assets/img/perfil.jpg" alt="">
                </div>

                <div>
                    <span class="nav__name"></span>
                    <span class="nav__name"></span>
                </div>
            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="{{url('/AdminIndex')}}" class="nav__link active">Inicio</a></li>


                    <li class="nav__item"><a href="{{url('/estadisticas')}}" class="nav__link">Estadística</a></li>


                    <li class="nav__item"><a href="{{url('/SubirFormatos')}}" class="nav__link">Subir Formatos</a></li>
                    <li class="nav__item dropdown">
                        <a  href="#" class="nav__link dropdown__link">Validaciones <i class='bx bx-chevron-down dropdown__icon'></i></a>


                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="{{url('/ListaDeAlumnos')}}" class="nav__link">Lista de Alumnos</a></li>
                            <li class="dropdown__item"><a href="{{url('/ListaDeAlumnosInhabilitados')}}" class="nav__link">Lista de Alumnos Inhabilitados</a></li>
                        </ul>
                    </li>

                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link">Gestion de Banners <i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="{{url('/RegisterBannerServicio')}}" class="nav__link">Registro de imagenes de servicios</a></li>
                            <li class="dropdown__item"><a href="{{url('/consultaBannerServicio')}}" class="nav__link">Consulta de imagenes habilitadas de servicio</a></li>
                            <li class="dropdown__item"><a href="{{url('/consultaBannerServicioInhabilitadas')}}" class="nav__link">Consulta de imagenes inhabilitadas de servicio</a></li>

                             </ul>

                             <li class="nav__item"><a href="{{ url('/logout')}}" class="nav__link"> Cerrar Sesión</a></li>
        </div>
        </div>
    </nav>


    </header>
    <script src="{{asset('js/Pantallas_Alumno_Servicio/Layout_Alumno.js')}}"></script>
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

    <section class="section-main">
      <h1>Bienvenido Administrador de servicio social
      <?php /*<br> Usuario con matricula: {{ Auth::user()->id}} */?>
      </h1>
    </section>
    <section class="section-two">
 <!-- AQUI EMPIEZA CONTENIDO; -->
      @yield('content')
      @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    </section>





    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>



    @yield('script')

  </body>
</html>
