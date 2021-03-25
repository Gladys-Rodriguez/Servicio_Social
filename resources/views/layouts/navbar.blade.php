<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ==== CONTENIDO CSS === -->
    <link rel="stylesheet" href="{{asset('css/navbar/navbar.css')}}">
    <!-- ==== FIN CSS === -->

    <title>Document</title>
</head>
<header class="header">
    <a href="#" class="header_logo"> APOYOS EDUCATIVOS</a>
    <ion-icon name="menu-outline" class="header_toggle" id="nav-toggle"></ion-icon>
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
                   <li class="nav_item"><a href="#" class="nav_link"><i class="fas fa-users"></i>SERVICIO SOCIAL</a></li>
                   <li class="nav_item"><a href="#" class="nav_link"><i class="fas fa-coins"></i>BECAS</a></li>
                   <li class="nav_item"><a href="#" class="nav_link"><i class="fas fa-bus"></i>PRACTICAS Y VISITAS ESCOLARES</a></li>

                </ul>
           </div>
        </div>

        <!--<div class="nav_social">
            <a href="#" class="nav_social-ico"></a>
            <a href="#" class="nav_social-ico"></a>
            <a href="#" class="nav_social-ico"></a>
        </div> -->

    </nav>
</header>
<body>
<<<<<<< HEAD
    <header class="header">
        <a href="#" class="header_logo"> APOYOS EDUCATIVOS</a>
        <ion-icon name="menu-outline" class="header_toggle" id="nav-toggle"></ion-icon>
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
                       <li class="nav_item"><a href="#" class="nav_link"><i class="fas fa-users"></i>SERVICIO SOCIAL</a></li>
                       <li class="nav_item"><a href="#" class="nav_link"><i class="fas fa-coins"></i>BECAS</a></li>
                       <li class="nav_item"><a href="#" class="nav_link"><i class="fas fa-bus"></i>PRACTICAS Y VISITAS ESCOLARES</a></li>

                    </ul>
               </div>
            </div>

            <!--<div class="nav_social">
                <a href="#" class="nav_social-ico"></a>
                <a href="#" class="nav_social-ico"></a>
                <a href="#" class="nav_social-ico"></a>
            </div> -->

        </nav>
    </header>

    @yield("content");
=======


    <main>
    @yield('content')
    </main>

>>>>>>> 7a6c674fa46c38014e1a5d8181156f5c43a17aac

    <!-- ==== IONICONS ==== -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- ==== CONTENIDO JS ==== -->
    <script src="{{asset('js/navbar/navbar.js')}}"></script>
    <!-- ==== FIN JS ==== -->
</body>
</html>
