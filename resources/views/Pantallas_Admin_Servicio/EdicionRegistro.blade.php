@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Datos Servicio')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/registrofechas.css')}}">

@endsection

@section('content')
<div class="container">

<form action="">
    <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span> Registro de Fechas</h2>
    <button class="submit">
        <span class="entypo-lock">
           <!-- <i class="fa fa-lock"></i> -->
        </span>
    </button>
   <!-- <span class="entypo-user inputUserIcon"> -->
      <!-- <i class="fa fa-user"></i> -->
    <!-- </span> -->
    <input type="date" class="user" placeholder="ursername"/>
   <!-- <span class="entypo-key inputPassIcon"> -->
      <!-- <i class="fa fa-key"></i> -->
     <!-- </span> -->
    <input type="date" class="pass" placeholder="password"/>
  </form>
</div>
@endsection

@section('script')
<script src="{{asset('js/Pantallas_Admin_Servicio/registrofechas.js')}}"></script>

@endsection
