<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ==== CONTENIDO CSS === -->
    <link rel="stylesheet" href="{{asset('css/layout/navbar.css')}}">
    @yield('css')

    <!-- ==== FIN CSS === -->

    <title>@yield('title')</title>
</head>
<header class="header">
    <a href="#" class="header_logo" id="header-logo"> APOYOS EDUCATIVOS</a>
    <ion-icon name="menu-outline" class="header_toggle" id="nav-toggle"></ion-icon>

</header>
<body>


    <nav class="nav" id="nav-menu">
        <div class="nav_content bd-grid">
            <ion-icon name="close-outline" class="nav_close" id="nav-close"></ion-icon>



            <div class="nav_profile">
                <div class="nav_img">
                    <img src="{{asset('img/logo/logoSAE3.png')}}" alt="">
                </div>

                <div>
                    <a href="#" class="nav_name">CECyT N°13</a>
                    <span class="nav_subtitulo">Ricardo Flores Magón</span>
                </div>
           </div>

           <div class="nav_menu">
               <ul class="nav_list">
                   <li class="nav_item"><a href="#" class="nav_link active"><i class="fas fa-home"></i>INICIO</a></li>

                   <li class="nav_item dropdown">

                        <a href="#" class="nav_link dropdown_link"><i class="far fa-handshake"> GENERAL </i><i class='bx bxs-chevron-down dropdown_icon'></i></a>

                        <ul class="dropdown_menu">
                            <li class="dropdown_item"><a href="#" class="nav_link">Calendario de Visitas</a></li>
                            <li class="dropdown_item"><a href="#" class="nav_link">Requisitos de Empresas</a></li>
                            <li class="dropdown_item"><a href="#" class="nav_link">Documentos</a></li>
                            <li class="dropdown_item"><a href="#" class="nav_link">Ejemplo de llenado de Documentos</a></li>

                        </ul>

                  </li>
                  <li class="nav_item dropdown">
                        <a href="#" class="nav_link dropdown_link"><i class="far fa-handshake"> VISITAS Y PRÁCTICAS </i><i class='bx bxs-chevron-down dropdown_icon'></i></a>

                        <ul class="dropdown_menu">
                            <li class="dropdown_item"><a href="#" class="nav_link">Solicitar Visita</a></li>
                            <li class="dropdown_item"><a href="#" class="nav_link">Mis visitas</a></li>
                        </ul>
                    </li>

                   <li class="nav_item"><a href="#" class="nav_link"><i class="fas fa-bus"></i>Cerrar Sesion</a></li>

                </ul>
           </div>
        </div>

        <!--<div class="nav_social">
            <a href="#" class="nav_social-ico"></a>
            <a href="#" class="nav_social-ico"></a>
            <a href="#" class="nav_social-ico"></a>
        </div> -->

    </nav>


    <main class="l-main">

    @yield('content')
    </main>


    @yield('script')
    <!-- ==== IONICONS ==== -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- ==== CONTENIDO JS ==== -->
    <script src="{{asset('js/layouts/navbar.js')}}"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>


    <!-- ==== FIN JS ==== -->
</body>
</html>
