@extends('Pantallas_Principales.navbarconfirmarcorreo')

@section('title', 'Prueba editarr datos')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/confirmarCorreo.css')}}">
@endsection

@section('content')
<br>
<div class="container">
<div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Confirmar"</h3>

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
    <a class="boton_personalizado" href="/LoginForm">Confirmar correo</a>


     </div>
</div>
@endsection
