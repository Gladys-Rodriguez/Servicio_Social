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


            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="{{url('/Admin_Practicas_Visitas_Index2')}}" class="nav__link" id="home_practicas">HOME</a></li>

                    <li class="nav__item dropdown">
                      <a href="#" class="nav__link dropdown__link" id="Menu_Documentos">Documentacion<i class='bx bx-chevron-down dropdown__icon'></i></a>
                      <ul class="dropdown__menu">
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.registrarTipoDocumento') }} " class="nav__link" id="Doc_Registrar">Registrar Nuevo Documento Requerido</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.indexTipoDocumento') }} " class="nav__link" id="Doc_Ver">Ver Documentos Requeridos</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.registrarFormato') }} " class="nav__link" id="Formato_Registrar">Subir Formato de Vista Escolar</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.indexFormatosEjemplo') }} " class="nav__link" id="Formato_Ejemplo">Formatos de Ejemplo</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.indexFormatosPlantilla') }} " class="nav__link" id="Formato_Plantilla">Formatos Plantilla</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.indexFormatosCalendarioVisitas') }} " class="nav__link" id="Formato_Calendario">Calendario de Visitas</a></li>
                        </ul>
                    </li>

                    <li class="nav__item dropdown">
                      <a href="#" class="nav__link dropdown__link" id="Menu_Administracion">Administración<i class='bx bx-chevron-down dropdown__icon'></i></a>
                      <ul class="dropdown__menu">
                          <li class="dropdown__item"><a href="{{ route('AdminPracticas.registrarDocente') }}" class="nav__link" id="Docente_Registrar">Registrar Docente</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.indexDocente') }} " class="nav__link" id="Docente_Ver">Ver Docentes</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.registrarCarrera') }} " class="nav__link" id="Carrera_Registrar">Registrar Carrera</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.indexCarrera') }} " class="nav__link" id="Carrera_Ver">Ver Carreras</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.registrarGrupo') }} " class="nav__link" id="Grupo_Registrar">Registrar Grupo</a></li>
                          <li class="dropdown__item"><a href=" {{ route('AdminPracticas.indexGrupo') }} " class="nav__link" id="Grupo_Ver">Ver Grupos</a></li>
                      </ul>
                    </li>

                    <li class="nav__item dropdown">
                      <a href="#" class="nav__link dropdown__link" id="menu_visitas">Solicitudes<i class='bx bx-chevron-down dropdown__icon'></i></a>
                      <ul class="dropdown__menu">
                          <li class="dropdown__item"><a href="{{url('/Solicitudes_Practicas_Visitas')}}" class="nav__link" id="Solicitud_Revisar">Revision de Solicitudes</a></li>
                          <li class="dropdown__item"><a href="{{ route('AdminPracticas.solicitudesCorregidasIndex') }}" class="nav__link" id="Solicitud_Correccion">Solicitudes mandadas a Corregir</a></li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown__item"><a href="{{ route('AdminPracticas.solicitudesRechazadasIndex') }}" class="nav__link" id="Solicitud_Rechazada">Visitas Rechazadas</a></li>
                          <li class="dropdown__item"><a href="{{ route('AdminPracticas.solicitudesAceptadasIndex') }}" class="nav__link" id="Solicitud_Aceptada">Visitas Aceptadas</a></li>
                          <li class="dropdown__item"><a href="{{ route('AdminPracticas.solicitudesFinalizadasIndex') }}" class="nav__link" id="Solicitud_Finalizada">Visitas Finalizadas</a></li>
                      </ul>
                    </li>

                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link" id="Banner_Practicas">Gestion de Banners <i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="{{url('/RegisterBannerPracticas')}}" class="nav__link" id="Banner_Registro">Registro de imagenes de prácticas</a></li>
                            <li class="dropdown__item"><a href="{{url('/consultaBannerPracticas')}}" class="nav__link" id="Banner_Habilitadas">Consulta de imagenes habilitadas de prácticas</a></li>
                            <li class="dropdown__item"><a href="{{url('/consultaBannerPracticasInhabilitadas')}}" class="nav__link" id="Banner_Inhabilitadas">Consulta de imagenes inhabilitadas de prácticas</a></li>

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

    <section class="section-main">
      <h1>EDITAR IMAGEN DE BANNER DE PRACTICAS</h1>
    </section>
    <section class="section-two">
 <!-- AQUI EMPIEZA CONTENIDO; -->
      @yield('content')

    </section>
