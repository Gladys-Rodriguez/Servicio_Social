@extends('layouts.navbarAdminIndex2')
@section('title', 'Index Generaladmin')


@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo.css')}}">
@endsection


@section('content')
  

    <div class="img-slider">
      <div class="slide active">
        <img src="{{asset('img/others/15.jpg')}}" alt="">
        <div class="info">
          <h2>Noticia 1</h2>
          <p> Para realizar el trámite de Dictamen ante la Comisión de Situación Escolar del Consejo Técnico Consultivo Escolar,
          deberás cumplir con los siguientes requisitos: <a href="{{asset('documents/admon.pdf')}}" target="_blank">
          Descargar Archivo
        </a> </p>
        </div>
      </div>
      <div class="slide">
        <img src="{{asset('img/others/12.jpg')}}" alt="">
        <div class="info">
          <h2>noticia 2</h2>
          <p>Si actualizaste datos personales y enviaste documentación revisar correo electronico</p>
        </div>
      </div>
      <div class="slide">
        <img src="{{asset('img/others/14.jpg')}}" alt="">
        <div class="info">
          <h2>Noticia 3</h2>
          <p>Formatos para descargar documentos importantes del Administrador servicio soacial</p>
        </div>
      </div>
      <div class="slide">
        <img src="{{asset('img/others/11.jpg')}}" alt="">
        <div class="info">
          <h2>Noticia 4</h2>
          <p>Medidas de seguridad para las aulas virtuales en la plataforma ZOOM</p>
        </div>
      </div>
      <div class="slide">
        <img src="{{asset('img/others/9.jpg')}}" alt="">
        <div class="info">
          <h2>Noticia 5</h2>
          <p>Plan de trabajo anual redes de genero 2021</p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 5000);
      }
      repeater();
    }
    repeat();
    </script>

   

@endsection






 

    


