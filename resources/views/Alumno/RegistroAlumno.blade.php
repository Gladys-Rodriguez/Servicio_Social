@extends('layouts.navbarsub')


@section('title', 'Registro')

@section('css')
<link rel="stylesheet" href="{{asset('css/Alumno/FormularioAlumno.css')}}">
@endsection

@section('content')
<br>

<div class="container">
   <!-- <span class="big-circle"></span> -->
   <!-- <img src="img/shape.png" class="square" alt="" /> -->
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          dolorum adipisci recusandae praesentium dicta!
        </p>

        <div class="info">
          <div class="information">
            <img src="img/location.png" class="icon" alt="" />
            <p>92 Cherry Drive Uniondale, NY 11553</p>
          </div>
          <div class="information">
            <img src="img/email.png" class="icon" alt="" />
            <p>lorem@ipsum.com</p>
          </div>
          <div class="information">
            <img src="img/phone.png" class="icon" alt="" />
            <p>123-456-789</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="{{route('RegistroAlumnno.create')}}" method="POST" autocomplete="off">
            @csrf

          <h3 class="title">Registro</h3>
          <div class="input-container">
            <input type="text" name="No_Boleta" class="input"/>
            <label for="">No. Boleta</label>
            <span>No. Boleta</span>
          </div>

            <div class="input-container">
              <input type="text" name="Nombre" class="input"/>
              <label for="">Nombre</label>
              <span>Nombre</span>
            </div>

            <div class="input-container">
                <input type="text" name="Ap_Paterno" class="input"/>
                <label for="">Apellido Paterno</label>
                <span>Apellido Paterno</span>
              </div>

              <div class="input-container">
                <input type="text" name="Ap_Materno" class="input"/>
                <label for="">Apellido Materno</label>
                <span>Apellido Materno</span>
              </div>

        <div class="input-container">
            <input type="text" name="Carrera" class="input"/>
            <label for="">Carrera</label>
            <span>Carrera</span>
        </div>

        <div class="input-container">
            <input type="number" name="Semestre" class="input" />
            <label for="">Semestre</label>
            <span>Semestre</span>
          </div>

          <div class="input-container">
            <input type="text" name="Grupo" class="input" />
            <label for="">Grupo</label>
            <span>Grupo</span>
          </div>

          <div class="input-container">
            <input type="text" name="Turno" class="input" />
            <label for="">Turno</label>
            <span>Turno</span>
          </div>

          <div class="input-container">
            <input type="email" name="email" class="input" />
            <label for="">Email</label>
            <span>Email</span>
          </div>

          <input type="submit" value="Send" class="btn" />
        </form>
      </div>
    </div>
  </div>

@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Alumno/FormularioAlumno.js')}}"></script>
@endsection
