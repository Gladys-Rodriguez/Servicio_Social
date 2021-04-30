
@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno2')

<!-- comentario -->
@section('title', 'Nuevo Registro')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

@endsection

@section('content')

<div class="container">
    <h2>Registro de Servicio Social</h2>
        <div class="progress-bar">
            <div class="step">
                <p>Responsable Directo</p>
                <div class="bullet">
                    <span>1</span>
                 </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Dependencia</p>
                <div class="bullet">
                    <span>2</span>
                </div>
             <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Fechas de registro</p>
                <div class="bullet">
                    <span>3</span>
                </div>
             <div class="check fas fa-check"></div>
            </div>

        </div>
<div class="form-outer">
    <div class="separa">
      <form action="#" method="" autocomplete="off" id="responsable">
        <input type="hidden" name="_token" value=""/>
        <div class="page slide-page">
          <div class="title">Datos del Responsable Directo:</div>
          <br>
          <div class="field">
            <div class="label">Nombre de la Dependencia:</div>
            <input type="text" name="nombre_depen">
         </div>
        <div class="field">
            <div class="label">Nombre del Responsable:</div>
            <input type="text" name="nom_responsable">
        </div>
        <div class="field">
            <div class="label">Apellido Paterno de Responsable:</div>
            <input type="text" name="Ap_responsable">
        </div>
        <div class="field">
            <div class="label">Apellido Materno de Responsable:</div>
            <input type="text" name="Am_responsable">
        </div>
    <div class="field">
        <div class="label">Telefono:</div>
        <input type="text" name="telefono">
    </div>
    <div class="field">
        <div class="label">E-mail:</div>
        <input type="text" name="email_responsable">
    </div>
    <div class="field">
        <div class="label">id_direcciones</div>
        <input type="text" name="id_direcciones">
    </div>
    <div class="field">
        <button class="firstNext next">Next</button>
    </div>
    <div class="field btns">
        <button class="submit sub">Submit</button>
    </div>
</div>
</form>
<form action="#" method="" autocomplete="off" id="depenencia">
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
            <button class="prev-2 prev">Previous</button>

        </div>
          <div class="field">
            <button class="next-2 next">Next</button>
        </div>
            <div class="field btns">
                <button class="submit sub">Submit</button>
            </div>


    </div>
    </form>

    <!-- tercer form -->
    <form action="#" method="" autocomplete="off" id="fechas">
        <div class="page">
                  <div class="title">Fechas</div>
                  <br>
                    <div class="field">
                        <div class="label">Fecha de Inicio:</div>
                        <input type="text">
                  </div>
                    <div class="field">
                        <div class="label">Fecha de Termino:</div>
                    <input type="text">
                  </div>
                  <div class="field">
                    <div class="label">Fecha de Inscripción:</div>
                 <input type="text">
                 </div>
                 <div class="field">
                  <div class="label">id_dependencia</div>
                    <input type="text">
                 </div>
                <div class="field">
                    <div class="label">id_alumno</div>
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

<script src="{{asset('js/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.js')}}"></script>
@endsection
