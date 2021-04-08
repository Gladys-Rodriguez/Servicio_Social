@extends('Pantallas_Principales.navbarRegisterForm')

@section('title', 'Registro')

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
    <form action="{{route('registros.store')}}" method="POST">
          @csrf
        <!-- USERNAME INPUT -->
        <label>Matricula</label>
        <input type="text" name="id" placeholder="Matricula">
        <!-- USERNAME INPUT -->
        <label>Correo Institcuional</label>
        <input type="email" name="email" placeholder="Correo Institucional">
        <!-- PASSWORD INPUT -->
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña">
        <!-- ROL INPUT
        <label>Rol</label>
        <input type="int" name="rol" placeholder="Rol"> -->

        <button type="submit">Entrar</button>

      </form>

    </div>


     </div>
</div>
@endsection
