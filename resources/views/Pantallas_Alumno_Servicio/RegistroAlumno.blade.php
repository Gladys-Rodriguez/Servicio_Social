@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno3')

<!-- comentario1 -->
@section('title', 'Registro')

@section('css')

<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/FormularioAlumno.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

@endsection

@section('content')


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
    <div class="separa">
      <form action="{{route('RegistroAlumno.store')}}" method="POST" autocomplete="off" id="formulario">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="page slide-page">
          <div class="title">Datos Personales:</div>
          <br>
          <div class="field">
            <div class="label">Datos</div>
          <!--   <select name="id_datos">
                @foreach($datos as $item)
                <option value="{{ $item->id_datos }}"> {{$item->nombre}} </option>
                @endforeach
            </select> -->
         </div>
        <div class="field">
            <div class="label">Usuarios</div>
          <!--  aqui iba lo de Gladys -->
        </div>
    <div class="field">
        <div class="label">Carrera</div>
        <input type="text" name="carrera">
    </div>
    <div class="field">
        <div class="label">Semestre</div>
        <input type="Number" name="semestre">
    </div>
    <div class="field">
        <div class="label">Grupo</div>
        <input type="text" name="grupo">
    </div>
    <div class="field">
        <div class="label">Turno)</div>
        <select name="turno">
            <option> Matutino </option>
            <option> Vespertino </option>
        </select>
    </div>
 <!--   <div class="field">
        <div class="label">Teléfono Local</div>
        <input type="text">
    </div>
    <div class="field">
        <div class="label">Teléfono Celular</div>
        <input type="text">
    </div>-->
    <div class="field">
        <button class="firstNext next">Next</button>
    </div>
    <div class="field btns">
        <button class="submit sub">Submit</button>
    </div>
</div>
</form>
<form action="" method="POST" autocomplete="off" id="social">
<div class="page">
          <div class="title">Domicilio:</div>
          <br>
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
</form>


</div>
</div>
 </div>
@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Alumno_Servicio/FormularioAlumno.js')}}"></script>
<script src="{{asset('js/Pantallas_Alumno_Servicio/FormRegistro.js')}}"></script>
@endsection
