
@extends('Pantallas_Principales.navbarLoginForm')

@section('title', 'LOGIN')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/pantallaLogin.css')}}">
@endsection

@section('content')

<div class="login-wrap">

	<div class="login-html">

        <div class="photo">

            <img src="/img/logo/logoSAE2.png" alt="">
        </div>
        <br>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Inicia Sesión</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registro</label>

        <div class="login-form">

            <form method="POST" action="{{ route('login') }}">
                @csrf
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">{{ __('E-Mail Address') }}</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">{{ __('Password') }}</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Recordar contraseña </label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Entrar">
                    {{ __('Entrar') }}
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">¿Olvidaste tu contraseña?</a>
				</div>
			</div>
			<div class="sign-up-htm">

				<div class="group">
					<input type="submit" class="button" value="Regístrate">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">¿Ya estás registrado?</a>
				</div>
			</div>
        </form>
		</div>
	</div>

</div>
      @endsection
