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
      <nav class="nav" id="nav-menu">
        <div class="nav__content bd-grid">
            <a href="" class="nav__perfil">
                <div class="nav__img">
                    <img src="{{asset('img/logo/logoSAE3.png')}}" alt="">
                </div>

            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="{{url('/Index_Master')}}" class="nav__link">HOME</a></li>
                    <li class="nav__item"><a href="{{url('/consultaAlumnoM')}}" class="nav__link">Activar Cuentas</a></li>
                    <li class="nav__item"><a href="{{url('/RegisterFormRoles')}}" class="nav__link">Nuevo Admin</a></li>
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link">Consulta Admin<i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="{{url('/ConsultaAdminSer')}}" class="nav__link">Admin Servicio</a></li>

                            <li class="dropdown__item"><a href="{{url('/ConsultaAdminBe')}}" class="nav__link">Admin Becas</a></li>

                            <li class="dropdown__item"><a href="{{url('/ConsultaAdminPra')}}" class="nav__link">Admin Practicas</a></li>
                        </ul>
                    </li>
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link">Registro de Banners <i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="{{url('/RegisterBannerInicio')}}" class="nav__link">Banner de home</a></li>

                            <li class="dropdown__item"><a href="{{url('/RegisterBannerServicio')}}" class="nav__link">Banner de servicios</a></li>

                            <li class="dropdown__item"><a href="{{url('/RegisterBannerBecas')}}" class="nav__link">Banner de becas</a></li>

                            <li class="dropdown__item"><a href="{{url('/RegisterBannerPracticas')}}" class="nav__link">Banner de practicas</a></li>
                        </ul>
                    </li>
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link">Banners habilitados<i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="{{url('/consultaBannerInicio')}}" class="nav__link">Banner de home</a></li>

                            <li class="dropdown__item"><a href="{{url('/consultaBannerServicio')}}" class="nav__link">Banner de servicios</a></li>

                            <li class="dropdown__item"><a href="{{url('/consultaBannerBecas')}}" class="nav__link">Banner de becas</a></li>

                            <li class="dropdown__item"><a href="{{url('/consultaBannerPracticas')}}" class="nav__link">Banner de practicas</a></li>
                        </ul>
                    </li>
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link">Banners deshabilitados<i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="{{url('/consultaBannerInicioInhabilitadas')}}" class="nav__link">Banner de home</a></li>

                            <li class="dropdown__item"><a href="{{url('/consultaBannerServicioInhabilitadas')}}" class="nav__link">Banner de servicios</a></li>

                            <li class="dropdown__item"><a href="{{url('/consultaBannerBecasInhabilitadas')}}" class="nav__link">Banner de becas</a></li>

                            <li class="dropdown__item"><a href="{{url('/consultaBannerBecasInhabilitadas')}}" class="nav__link">Banner de practicas</a></li>
                        </ul>
                    </li>
                    <li class="nav__item"><a href="{{url('/logout')}}" class="nav__link"> CERRAR SESIÓN</a></li>

                </ul>
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
      <h1>CONSULTA DE ALUMNOS</h1>
    </section>
    <section class="section-two">
 <!-- AQUI EMPIEZA CONTENIDO; -->
      @yield('content')

    </section>





    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>



    @yield('script')

  </body>
</html>
