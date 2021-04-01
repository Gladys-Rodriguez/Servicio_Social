<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fin Responsivo -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <!-- Links -->
    <link rel="stylesheet" href="{{asset('css/style_layoutbase.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" charset="utf-8"></script>
</head>
<body>

 <input type="checkbox" id="check">

<!-- Inicio header -->
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>

    <div class="left_area">
        <h3> Servicios <span> Educativos</span></h3>
    </div>
    <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
    </div>
</header>
<!-- Fin header -->
<!-- mobile navigation bar start -->
<div class="mobile_nav">
    <div class="nav_bar">
        <img src="{{asset('img/logo/logoSAE1.png')}}" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
        <a href=""> <i class="fas fa-home"></i> <span>Inicio</span></a>
    <a href=""> <i class="fas fa-users"></i> <span>Servicio Social</span></a>
    <a href=""> <i class="fas fa-coins"></i> <span>Becas</span></a>
    <a href=""> <i class="fas fa-bus"></i> <span>Prácticas y Visitas Escolares</span></a>
    </div>
</div>
<!--mobile navigation bar end -->

<!-- Inicia SideBar -->
<div class="sideBar">
    <div class="menu_despliegue">
        <img src="{{asset('img/logo/logoSAE1.png')}}" class="logo_image" alt="">
    </div>
    <a href=""> <i class="fas fa-home"></i> <span>Inicio</span></a>
    <a href=""> <i class="fas fa-users"></i> <span>Servicio Social</span></a>
    <a href=""> <i class="fas fa-coins"></i> <span>Becas</span></a>
    <a href=""> <i class="fas fa-bus"></i> <span>Prácticas y Visitas Escolares</span></a>
</div>
<!-- Fin SideBar -->

<div class="content"></div>


<script type="text/javascript">
$(document).ready(function(){
    $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
    });
});
</script>


</body>
</html>
