@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_datosPersonalesA')

@section('title', 'Datos Personales')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/DatosPersonales.css')}}">

@endsection

@section('content')

<div class="container">
  <div id="logo"><h1 class="logo">hulu</h1>
    <div class="CTA">
      <h1>Get $10</h1>
      </div>
  </div>
  <div class="leftbox">
    <div class="nav-form">

      <a id="profile" class="active"><i class="fa fa-user"></i></a>
      <a id="payment"><i class="fa fa-credit-card"></i></a>
      <a id="subscription"><i class="fa fa-tv"></i></a>
      <a id="privacy"><i class="fa fa-tasks"></i></a>
      <a id="settings"><i class="fa fa-cog"></i></a>


    </div>
  </div>
  <div class="rightbox">

    <div class="profile">
        @foreach ($datos as $dato )
      <h1>Personal Info</h1>
      <h2>Nombre</h2>
      <p> {{$dato-> nombre}} <!--<button class="btn">update</button>--></p>
      <h2>Apellido Paterno </h2>
      <p>{{$dato-> ap_paterno}}</p>
      <h2>Apellido Materno</h2>
      <p>{{$dato-> ap_materno}}</p>
      <h2>Telefono</h2>
      <p>{{$dato-> telefono}} <!--<button class="btn">update</button>--></p>
      <h2>Celular </h2>
      <p>{{$dato-> celular}} <!--<button class="btn">Change</button>--></p>
        @endforeach
    </div>

    <div class="payment noshow">
        @foreach ($direccions as $direccion)
      <h1> Dirección </h1>
      <h2>Ciudad</h2>
      <p>{{$direccion-> ciudad}}<button class="btn">update</button></p>
      <h2>Alcaldía/Municipio</h2>
      <p>{{$direccion-> alcaldia}}<button class="btn">change</button></p>
      <h2>Colonia</h2>
      <p>{{$direccion-> colonia}}</p>
      <h2> Calle</h2>
      <p>{{$direccion-> calle}}</p>
      <h2>Num. ext.</h2>
      <p>
        {{$direccion-> num_ext}}
      </p>
      <h2>Num. int.</h2>
      <p>{{$direccion-> num_int}} </p>
      <h2>C.P.</h2>
      <p>{{$direccion-> cp}} </p>
      @endforeach
    </div>

    <div class="subscription noshow">
      <h1>Your Subscription</h1>
      <h2>Payment Date</h2>
      <p>05-15-2018 <button class="btn">pay now</button></p>
      <h2>Your Next Charge</h2>
      <p>$8.48<span> includes tax</span></p>
      <h2>Hulu Base Plan</h2>
      <p>Limited Commercials <button class="btn">change plan</button></p>
      <h2>Add-ons</h2>
      <p>None <button class="btn">manage</button></p>
      <h2>Monthly Recurring Total </h2>
      <p>$7.99/month</p>
    </div>

    <div class="privacy noshow">
      <h1>Privacy Settings</h1>
      <h2>Manage Email Notifications<button class="btn">manage</button></h2>
      <p></p>
      <h2>Manage Privacy Settings<button class="btn">manage</button></h2>
      <p></p>
      <h2>View Terms of Use <button class="btn">view</button></h2>
      <p></p>
      <h2>Personalize Ad Experience <button class="btn">update</button></h2>
      <p></p>
      <h2>Protect Your Account <button class="btn">protect</button></h2>
      <p></p>
    </div>
 <div class="settings noshow">
      <h1>Account Settings</h1>
      <h2>Sync Watchlist to My Stuff<button class="btn">sync</button></h2>
      <p></p>
      <h2>Hold Your Subscription<button class="btn">hold</button></h2>
      <p></p>
      <h2>Cancel Your Subscription <button class="btn">cancel</button></h2>
      <p></p>
      <h2>Your Devices <button class="btn">Manage Devices</button></h2>
      <p></p>
      <h2>Referrals <button class="btn">get $10</button></h2>
   <p></p>
    </div>

  </div>

  <div class="btn_editar">
    @foreach ($users as $user)
<a class="boton_personalizado" href="/EditarAlumnoForm/{{$user->id}}">Editar</a></td>
@endforeach
</div>

</div>


@endsection

@section('script')
<script src="{{asset('js/Pantallas_Alumno_Servicio/DatosPersonales.js')}}"></script>

@endsection
