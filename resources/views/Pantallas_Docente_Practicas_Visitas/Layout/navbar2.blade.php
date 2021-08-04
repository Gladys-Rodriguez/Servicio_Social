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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
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
                        
                    </div>
                </a>
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href=" {{ route('docente.inicio') }} " class="nav__link" id="inicio_docente">INICIO</a></li>

                        <li class="nav__item dropdown">
                            <a href="{{ route('docente.index')}}" class="nav__link dropdown__link active">VISITAS<i class='bx bx-chevron-down dropdown__icon'></i></a>

                            <ul class="dropdown__menu">
                                <li class="dropdown__item"><a href=" {{ route('docente.index')}}" class="nav__link">Solicitudes</a></li>
                                <li class="dropdown__item"><a href=" {{ route('docente.mostrarVisitas') }} " class="nav__link">Visitas Validadas</a></li>
                            </ul>
                        </li>

                        <li class="nav__item"><a href=" {{ route('docente.mostrarDatosDocente') }} " class="nav__link">MIS DATOS</a></li>
                        

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

    <!--<section class="section-main">
      <h1>Bienvenido Alumno </h1>
    </section>
    <section class="section-two">
  AQUI EMPIEZA CONTENIDO; -->
  
      @yield('content')

    </section>





    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>



    @yield('script')

  </body>
</html>
