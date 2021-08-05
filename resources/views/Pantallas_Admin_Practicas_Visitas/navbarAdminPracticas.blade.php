<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />
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
                   <!-- <span class="nav__name">Clay</span>
                    <span class="nav__name">Mitchell</span>
                </div> -->
            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="{{url('/Admin_Practicas_Visitas_Index2')}}" class="nav__link">HOME2</a></li>
                    <li class="nav__item"><a href="{{url('/Validacion_Practicas_Visitas')}}" class="nav__link">Validación de documentos</a></li>

                    <li class="nav__item dropdown">
                      <a href="#" class="nav__link dropdown__link" id="menu_visitas">Administración<i class='bx bx-chevron-down dropdown__icon'></i></a>
                      <ul class="dropdown__menu">
                          <li class="dropdown__item"><a href="{{ route('AdminPracticas.registrarDocente') }}" class="nav__link" id="solicitudes">Registrar Docente</a></li>
                          <li class="dropdown__item"><a href="#" class="nav__link" id="">Ver Docentes</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.indexTipoDocumento') }} " class="nav__link" id="">Documentos Requeridos</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.registrarTipoDocumento') }} " class="nav__link" id="">Registrar Nuevo Documento Requerido</a></li>
                          <li class="dropdown__item"><a href="#" class="nav__link" id="">Ver Carreras</a></li>
                          <li class="dropdown__item"><a href="#" class="nav__link" id="">Registrar Grupo</a></li>
                          <li class="dropdown__item"><a href="#" class="nav__link" id="">Ver Grupos</a></li>
                      </ul>
                    </li>

                    <li class="nav__item dropdown">
                      <a href="#" class="nav__link dropdown__link" id="menu_visitas">Solicitudes<i class='bx bx-chevron-down dropdown__icon'></i></a>
                      <ul class="dropdown__menu">
                          <li class="dropdown__item"><a href="{{url('/Solicitudes_Practicas_Visitas')}}" class="nav__link" id="">Solicitudes Nuevas</a></li>
                          <li class="dropdown__item"><a href="{{ route('AdminPracticas.solicitudesCorregidasIndex') }}" class="nav__link" id="">Solicitudes Corregidas</a></li>
                          <li class="dropdown__item"><a href="{{ route('AdminPracticas.solicitudesRechazadasIndex') }}" class="nav__link" id="">Visitas Rechazadas</a></li>
                          <li class="dropdown__item"><a href="{{url('/AceptadasV')}}" class="nav__link" id="">Visitas Aceptadas</a></li>
                          <li class="dropdown__item"><a href="{{url('/AceptadasV')}}" class="nav__link" id="">Visitas Finalizadas</a></li>
                      </ul>
                    </li>

                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link">Gestion de Banners <i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="{{url('/RegisterBannerPracticas')}}" class="nav__link">Registro de imagenes de prácticas</a></li>
                            <li class="dropdown__item"><a href="{{url('/consultaBannerPracticas')}}" class="nav__link">Consulta de imagenes habilitadas de prácticas</a></li>
                            <li class="dropdown__item"><a href="{{url('/consultaBannerPracticasInhabilitadas')}}" class="nav__link">Consulta de imagenes inhabilitadas de prácticas</a></li>

                        </ul>
                    </li>
                    <li class="nav__item"><a href="{{ url('/logout')}}" class="nav__link"> Cerrar Sesión</a></li>
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

  
      @yield('content')

    </section>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    @yield('script')

  </body>
</html>
