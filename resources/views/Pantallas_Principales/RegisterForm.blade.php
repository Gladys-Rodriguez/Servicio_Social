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
        <input type="text" name="id" placeholder="Matricula" required minlength="10" maxlength="10" >
        <!-- USERNAME INPUT -->
        <label>Correo Institucional</label>
        <input type="email" name="email" placeholder="Correo Institucional" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
        <!-- PASSWORD INPUT -->
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" required>
        <!-- ROL INPUT
        <label>Rol</label>
        <input type="int" name="rol" placeholder="Rol"> -->

        <button type="submit">Entrar</button>

      </form>

    </div>


     </div>
</div>
@endsection
