@extends('Pantallas_Principales.navbarLoginForm')

@section('title', 'LOGIN')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/pantallaLogin.css')}}">
@endsection

@section('content')
<br>
<!--<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"INICIO DE SESIÓN"</h3>
      </div> -->
    <!--Formulario-->
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
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="group">
                            <label for="password" class="label">{{ __('Password') }}</label>


                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>



                        <div class="group">
                            <input type="submit" class="button" value="Entrar">
                            <br>
                                @if (Route::has('password.request'))
                                    <div class="hr"></div>
				                    <div class="foot-lnk">
					                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                    </div>
                                 @endif

                        </div>
                    </div>

                    <div class="sign-up-htm">

                        <div class="group">
                            <a href="{{ route('RegisterForm') }}">
                            <input type="button" class="button" value="Regístrate">
                            <br>


                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">¿Ya estás registrado?</a>
                        </div>
                    </div>

                    </form>
                </div>
    </div>
    </div>

     </div>
</div>
@endsection
