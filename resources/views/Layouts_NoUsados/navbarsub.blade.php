<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>@yield('title')</title>
   @yield('css')
   <link rel="stylesheet" href="{{asset('css/navbar/navbarsub.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 </head>

 <body>



   <div class="menu-btn">
     <i class="fas fa-bars"></i>
   </div>

   <div class="side-bar bd-grid">
     <div class="close-btn">
       <i class="fas fa-times"></i>
     </div>



     <div class="nav_profile">
        <div class="nav_img">
            <img src="{{asset('img/logo/logoSAE3.png')}}" alt="">
        </div>

        <div>
            <a href="#" class="nav_name">CECyT N°13</a>
            <span class="nav_subtitulo">Ricardo Flores Magón</span>
        </div>
   </div>



     <div class="menu">
       <div class="item"><a href="#"><i class="fas fa-desktop"></i>APOYOS EDUCATIVOS</a></div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>Inicio<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
           <a href="#" class="sub-item">Sub Item 03</a>
         </div>
       </div>
       <div class="item"><a href="#"><i class="fas fa-th"></i>Servicio Social</a></div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>Practicas y Visitas <i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
         </div>
       </div>
       <div class="item"><a href="#"><i class="fas fa-info-circle"></i>Becas</a></div>
     </div>
   </div>


   <section class="main">

     @yield('content')
   </section>




   <script type="text/javascript">
   $(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });
   });
   </script>
   @yield('script')

 </body>
</html>
