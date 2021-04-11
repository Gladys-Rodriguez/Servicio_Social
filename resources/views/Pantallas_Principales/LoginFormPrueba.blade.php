@extends('Pantallas_Principales.navbarLoginForm')

@section('title', 'LOGIN')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/LoginFormPrueba.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"INICIO DE SESIÓN"</h3>
      </div>
    <!--Formulario-->
    <div class="login-box">
    <form action="{{route('loginPrueba.authenticate')}}" method="POST">
          @csrf
        <!-- USERNAME INPUT -->
        <label>Correo Institucional</label>
        <input type="email" name="email" placeholder="correo@hotmail.com">
        <!-- PASSWORD INPUT -->
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Entrar</button>
        <a href="{{url('/RegisterForm')}}">¿No tienes cuenta?</a>
      </form>
    </div>

     </div>
</div>
@endsection
