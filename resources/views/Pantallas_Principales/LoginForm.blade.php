@extends('Pantallas_Principales.navbarLoginForm')

@section('title', 'LOGIN')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/LoginForm.css')}}">
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
      <form action="{{route('registros.nuevoregistro')}}" method="POST">
          @csrf
        <!-- USERNAME INPUT -->
        <label>Correo Institcuional</label>
        <input type="text" name= "correo" placeholder="Correo Institucional">
        <!-- PASSWORD INPUT -->
        <label>Contraseña</label>
        <input type="password" name="contraseña" placeholder="Contraseña">
        <button type="submit">Entrar</button>
        <a href="{{url('/RegisterForm')}}">¿No tienes cuenta?</a>
      </form>
    </div>

     </div>
</div>
@endsection
