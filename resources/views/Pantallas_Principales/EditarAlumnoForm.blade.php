@extends('Pantallas_Principales.navbarEditarAlumnoForm')

@section('title', 'Editar datos de alumno')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Principales/EditarAlumnoForm.css')}}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="informacion">
      <div class="contact-info">
        <h3 class="title">"Datos personales"</h3>
      </div>

      <form action="/EditarAlumnoForm2/$Users->id" method="POST" autocomplete="off" id="servicios">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <input type="hidden" name="_method" value="PUT">
<div class="tabla-consulta">
          <table border="1">
             <tr>
                <td width=10%>Nombre</td>
                <td align="center"><input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" maxlength="60" onkeypress="return sololetrasespacio(event)"></td>
             </tr>
             <tr>
                <td width=10%>Apellido Paterno</td>
                <td align="center"><input type="text" name="ap_paterno" id="ap_paterno" placeholder="Ingresa tu apellido paterno" maxlength="60" onkeypress="return sololetras(event)"></td>
             </tr>

             <tr>
                 <td width=10%>Apellido Materno</td>
                 <td align="center"><input type="text" name="ap_materno" id="ap_materno" placeholder="Ingresa tu apellido materno" maxlength="60" onkeypress="return sololetras(event)"></td>
             </tr>

             <tr>
                 <td width=10%>Telefono</td>
                 <td align="center"><input type="text" name="telefono" id="telefono" placeholder="Ingresa tu telefono" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)"></td>
             </tr>

             <tr>
                <td width=10%>Celular</td>
                <td align="center"><input type="text" name="celular" id="celular" placeholder="Ingresa tu número de celular" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)"></td>
             </tr>

             <tr>
                <td width=10%>Ciudad</td>
                <td align="center"><input type="text" name="ciudad" id="ciudad" placeholder="Ingresa tu ciudad" required maxlength="60" onkeypress="return sololetras(event)"></td>
             </tr>

             <tr>
                 <td width=10%>Alcaldia</td>
                 <td align="center"><input type="text" name="alcaldia" id="alcaldia" placeholder="Ingresa tu alcaldia o municipio" required maxlength="60" onkeypress="return sololetras(event)"></td>
             </tr>

             <tr>
                <td width=10%>Colonia</td>
                <td align="center"><input type="text" name="colonia" id="colonia" placeholder="Ingresa tu colonia" required maxlength="60" onkeypress="return sololetras(event)"></td>
             </tr>

             <tr>
                <td width=10%>Calle</td>
                <td align="center"><input type="text" name="calle" id="calle" placeholder="Ingresa tu calle" required maxlength="60"></td>
             </tr>

             <tr>
                <td width=10%>Numero exterior</td>
                <td align="center"><input type="text" name="num_ext" id="num_ext" placeholder="Ingresa tu numero exterior" required maxlength="5" onkeypress="return solonumeros(event)"></td>
             </tr>

             <tr>
                <td width=10%>Numero interior</td>
                <td align="center"><input type="text" name="num_int" id="num_int" placeholder="Ingresa tu numero interior" required maxlength="5" onkeypress="return solonumeros(event)"></td>
             </tr>

             <tr>
             <td width=10%>Codigo postal</td>
             <td align="center"><input type="text" name="cp" id="cp" placeholder="Ingresa tu codigo postal" required maxlength="5" onkeypress="return solonumeros(event)"></td>
             </tr>

             <tr>
             <td width=10%>Carrera</td>
             <td align="center"><div class="label" for="carrera">Carrera:</div>
             <div class="col-md-6" type="text">
                        <select type="text" name="carrera" id="carrera">
                        <!--<option value="1"> Superadmin </option>-->
                        <option value="Técnico en informática"> Técnico en informática</option>
                        <option value="Técnico en contaduría"> Técnico en contaduría  </option>
                        <option value="Técnico en administración"> Técnico en administración  </option>
                        <option value="Técnico en administración de empresas turísticas"> Técnico en administración de empresas turísticas</option>
                        <option value="Técnico en gestión de la ciberseguridad"> Técnico en gestión de la ciberseguridad</option>
                        </select>
                        @error('carrera')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div></td>
             </tr>

             <tr>
             <td width=10%>Semestre</td>
             <td align="center"> <div class="label" for="semestre">Semestre:</div>
                    <div class="col-md-6" type="text">
                        <select type="text" name="semestre" id="semestre">
                        <!--<option value="1"> Superadmin </option>-->
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>
                        <option value="6"> 6</option>
                        </select>
                        @error('semestre')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div></td>
             </tr>

             <tr>
             <td width=10%>Grupo</td>
             <td align="center"><input type="text" name="grupo" id="grupo" placeholder="Ingresa tu grupo" required maxlength="5"></td>
             </tr>

             <tr>
             <td width=10%>Turno</td>
             <td align="center"><div class="label" for="turno">Turno:</div>
                    <div class="col-md-6" type="text">
                        <select type="text" name="turno" id="turno">
                        <!--<option value="1"> Superadmin </option>-->
                        <option value="Matutino"> Matutino </option>
                        <option value="Vespertino"> Vespertino </option>
                        <option value="Mixto"> Mixto </option>
                        </select>
                        @error('turno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div></td>
             </tr>

             <tr>
             <td width=10%>Matricula</td>
             <td align="center"><input type="text" name="id" id="id" value="{{$Users->id}}" required minlength="10" maxlength="10" onkeypress="return solonumeros(event)"></td>
             </tr>

             <tr>
             <td width=10%>Correo</td>
             <td align="center"><input type="text" name="email" id="email" value="{{$Users->email}}" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"></td>
             </tr>








        <tr>










        </tr>
        </table>
        </div>
        </form>



</div>
 </div>

@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.js')}}"></script>
@endsection
