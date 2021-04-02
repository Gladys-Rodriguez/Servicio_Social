@extends('layouts.navbarBecasIndex')

@section('title', 'BecasIndex')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/BecasIndex.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"BECAS"</h3>
        <p class="text">
          Bienvenido
        </p>
      </div>
    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
        <img src="{{ asset('img/becas/beca1.png')}}">
        </div>
        <div class="slide">
        <img src="{{ asset('img/becas/beca2.jpg')}}">
        </div>
        <div class="slide">
        <img src="{{ asset('img/becas/beca3.jpg')}}">
        </div>

        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>

        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>

      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 4000);
    </script>

     </div>
</div>
@endsection
