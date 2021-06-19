@extends('Pantallas_Principales.navbarConfirmar')


@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/confirmar.css')}}">

@section('content')
<br>
<div class="container">
<div class="informacion">
      <div class="contact-info">
      <h3 class="title">"Verificar correo"</h3>


      <div class="errores">
       @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        @endif
      </div>

      </div>

    <!--Formulario-->
    <div class="login-box">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                        <label>'Un link de verificación ha sido enviado a tu correo electronico'</label>
                        </div>
                        <br>
                    @endif


                    <label>Antes de proceder, revisa tu correo ya que se te envio un link de verificación.</label>
                    <br>
                    <label>Si tu no recibiste el email:</label>
                    <br>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click aqui para recibir uno nuevo') }}</button>
                    </form>
     </div>
     </div>
</div>
@endsection
