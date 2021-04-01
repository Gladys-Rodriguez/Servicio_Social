@extends('layouts.navbar')

@section('title', 'Index General')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/Index_gnral.css')}}">
@endsection

@section('content')
<br>
<div class="container">
   <!-- <span class="big-circle"></span> -->
   <!-- <img src="img/shape.png" class="square" alt="" /> -->
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">CECyT 13 "Ricardo Flores Magón"</h3>
        <p class="text">
          Bienvenido
        </p>
      </div>

      <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
            <div>

            <div class="slide first">
                <img src="{{ asset('img/carrusel/1.jpeg')}}">
            </div>

            <div class="slide">
             <img src="{{ asset('img/carrusel/2.png')}}">
            </div>

            <div class="slide">
                <img src="{{ asset('img/carrusel/3.jpg')}}">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            <div>

        </div>
     </div>
</div>
@endsection
