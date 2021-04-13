@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno2')


@section('title', 'Registro')

@section('css')

<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/FormularioAlumno.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

@endsection

@section('content')
<!--<h1> PRUEBA </h1>
<br>
<section class="form section" id="forms">
<div class="container" bd-grid>

    <span class="big-circle"></span>
   <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Datos Personales</h3>
        <p class="text">
          Te pedimos que ingreses tus datos personales para el correcto registro.
        </p>
    -->
        <!--<div class="info">
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
        </div> -->
<!--
        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
        -->
            <!--<a href="#">
              <i class=""></i>
            </a>
            <a href="#">
              <i class=""></i>
            </a>-->
 <!--         </div>
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


</section>
-->

 <div class="container">
    <h2>Signup Form</h2>
        <div class="progress-bar">
            <div class="step">
                <p>Datos</p>
                <div class="bullet">
                    <span>1</span>
                 </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Domicilio</p>
                <div class="bullet">
                    <span>2</span>
                </div>
             <div class="check fas fa-check"></div>
            </div>
        <!--<div class="step">
        <p>Birth</p>
        <div class="bullet">
          <span>3</span>
        </div>
        <div class="check fas fa-check">
    </div>
    </div>
        <div class="step">
        <p>Submit</p>
        <div class="bullet">
          <span>4</span>
        </div>
<div class="check fas fa-check">
</div>
</div>-->
        </div>
<div class="form-outer">
      <form action="#" >
        <div class="page slide-page">
          <div class="title">Datos Personales:</div>
          <br>
    <div class="field">
        <div class="label">First Name</div>
        <input type="text">
    </div>
    <div class="field">
        <div class="label">Apellido Paterno</div>
        <input type="text">
    </div>
    <div class="field">
        <div class="label">Apellido Materno</div>
        <input type="text">
    </div>
    <div class="field">
        <div class="label">Nombre(s)</div>
        <input type="text">
    </div>
    <div class="field">
        <div class="label">Teléfono Local</div>
        <input type="text">
    </div>
    <div class="field">
        <div class="label">Teléfono Celular</div>
        <input type="text">
    </div>
    <div class="field">
        <button class="firstNext next">Next</button>
    </div>
</div>
<div class="page">
          <div class="title">Domicilio:</div>
          <br>
            <div class="field">
                <div class="label">Ciudad o Estado:</div>
                <input type="text">
          </div>
            <div class="field">
                <div class="label">Municipio o Alcaldía:</div>
            <input type="text">
          </div>
          <div class="field">
            <div class="label">Colonia</div>
         <input type="text">
         </div>
         <div class="field">
          <div class="label">Calle:</div>
            <input type="text">
         </div>
        <div class="field">
            <div class="label">Num. Ext:</div>
            <input type="Number">
        </div>
        <div class="field">
            <div class="label">Num. Int:</div>
            <input type="Number">
        </div>
        <div class="field">
            <div class="label">CP:</div>
            <input type="Number">
      </div>
      <br>
        <div class="field btns">
            <button class="prev-1 prev">Previous</button>

        </div>
        <div class="field btns">
            <button class="submit sub">Submit</button>
        </div>


</div>
<!--        <div class="page">
          <div class="title">Date of Birth:</div>
        <br>
        <div class="field">
            <div class="label">Date</div>
            <input type="text">
        </div>
        <div class="field">
            <div class="label">Gender</div>
            <select>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
        <div class="field btns">
            <button class="prev-2 prev">Previous</button>
            <button class="next-2 next">Next</button>
        </div>
    </div>
        <div class="page">
          <div class="title">Login Details:</div>
          <br>
        <div class="field">
            <div class="label">Username</div>
            <input type="text">
        </div>
        <div class="field">
            <div class="label">Password</div>
            <input type="password">
        </div>
        <div class="field btns">
            <button class="prev-3 prev">Previous</button>
            <button class="submit">Submit</button>
         </div>
        </div> -->
</form>
</div>
 </div>
@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Alumno_Servicio/FormularioAlumno.js')}}"></script>
@endsection
