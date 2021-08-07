@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('css')
@endsection

@section('content')

    <section class="section-main">
        <h1>Registrar Docente</h1>
    </section>

    <div class="container-fluid bg-dark text-white py-5" >
        <div class="container border rounded p-5" style="min-height: 600px">
            <div class="display-4 mb-4">Registro de <div class="d-inline text-warning"> <strong>Docente</strong></div> </div>
            <form  action=" {{route('AdminPracticas.guardarDocente')}} " method="POST">
                @csrf
                <div class="h2">Datos Generales</div>
                <div class="row">
                    <div class="col-6">
                        <label for="num_empleado" class="form-label" >Número de Empleado: </label>
                        <input type="text" class="form-control" id="num_empleado" name="num_empleado" />
                        <br />
                    </div>
                    <div class="col-6">
                        <label for="academia" class="form-label" >Academia: </label>
                        <input type="text" class="form-control" id="academia" name="academia" />
                        <br />
                    </div>
                    <input type="hidden" name="id_rol" value="6">
                </div>
                
                <div class="row">
                    <div class="col-4">
                        <label for="nombre" class="form-label" >Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" />
                        <br />
                    </div>
                    <div class="col-4">
                        <label for="ap_paterno" class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" />
                        <br />
                    </div>
                    <div class="col-4">
                        <label for="ap_materno" class="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" />
                        <br />
                    </div>
                </div>

                <hr class="my-4">
                <div class="h2">Datos de Contacto</div>
                <div class="row">
                    <div class="col-6">
                        <label for="telefono" class="form-label" >Teléfono Casa: </label>
                        <input type="text" class="form-control" id="telefono" name="telefono" />
                        <br />
                    </div>
                    <div class="col-6">
                        <label for="celular" class="form-label">Celular: </label>
                        <input type="text" class="form-control" id="celular" name="celular" />
                        <br />
                    </div>
                </div>

                <hr class="my-4">
                <div class="h2">Datos de Usuario</div>
                <div class="row">
                    <div class="col-6">
                        <label for="email" class="form-label" >Correo electrónico: </label>
                        <input type="text" class="form-control" id="email" name="email" />
                        <br />
                    </div>
                    <div class="col-6">
                        <label for="email_confirmacion" class="form-label">Confirmar correo electrónico: </label>
                        <input type="text" class="form-control" id="email_confirmacion" name="email_confirmacion" />
                        <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="password" class="form-label" >Contraseña Provisional: </label>
                        <input type="text" class="form-control" id="password" name="password" />
                        <br />
                    </div>
                    <div class="col-6">
                        <label for="password_confirmacion" class="form-label">Confirmar Contraseña: </label>
                        <input type="text" class="form-control" id="password_confirmacion" name="password_confirmacion" />
                        <br />
                    </div>
                </div>

                <label for="estado" class="form-label">Estado: </label>
                <select  class="form-select" id="estado" name="estado">
                    <option value="1" >Habilitado</option>
                    <option value="0" >Deshabilitado</option>
                </select>
                <br />

                <div class="d-flex justify-content-end"> 
                    <a role="button" class="btn btn-danger text-end mx-2" href="#">Cancelar</a>
                    <button type="submit" class="btn btn-light" >Registrar Docente</button>
                </div>
            </form>
    </div>

@endsection

@section('script')
  <script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("Menu_Administracion");
    activo.classList.add("active");
    activo = document.getElementById("Docente_Registrar");
    activo.classList.add("active");
  </script>
@endsection