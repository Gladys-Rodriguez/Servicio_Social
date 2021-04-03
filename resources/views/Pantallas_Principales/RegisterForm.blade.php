@extends('Pantallas_Principales.navbarRegisterForm')

@section('title', 'Practicas Y Visitas Index')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/RegisterForm.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"REGISTRO"</h3>
      </div>
    <!--Formulario-->
    <div class="login-box">
      <form method="post">
      @csrf
        <!-- USERNAME INPUT -->
        <label for="matricula">Matricula</label>
        <input type="text" placeholder="Matricula">
        <!-- USERNAME INPUT -->
        <label for="correo">Correo Institcuional</label>
        <input type="text" placeholder="Correo Institucional">
        <!-- PASSWORD INPUT -->
        <label for="contraseña">Contraseña</label>
        <input type="password" placeholder="Contraseña">
        <input type="submit" value="Registrar">
      </form>
    </div>


     </div>
</div>
@endsection
