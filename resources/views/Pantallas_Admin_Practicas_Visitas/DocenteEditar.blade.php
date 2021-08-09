@extends('Pantallas_Admin_Practicas_Visitas.navbarAdminPracticas')

@section('title', 'Editar Docente')

@section('content')

    <section class="section-main">
        <h1>Editar Docente</h1>
    </section>

    <div class="container-fluid bg-dark text-white py-5" >
        <div class="container border rounded p-5" style="min-height: 600px">
            <div class="display-4 mb-4">Editar Datos<div class="d-inline text-warning"> <strong>Docente</strong></div> </div>
            <form  action=" {{ route('AdminPracticas.actualizarDocente', ['docente' => $docente]) }} " method="POST">
                @method('PUT')
                @csrf
                <div class="h2">Datos Generales</div>
                <div class="row">
                    <div class="col-6">
                        <label for="num_empleado" class="form-label" >Número de Empleado: </label>
                        <input type="text" class="form-control" id="num_empleado" name="num_empleado" value=" {{ $docente->user->id ?? '' }} " disabled/>
                        @if ($errors->has('num_empleado'))
                            <div class="alert alert-warning p-2 mt-2" role="alert">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ $errors->first('num_empleado') }}
                            </div>
                        @endif
                        <br />
                    </div>
                    <div class="col-6">
                        <label for="academia" class="form-label" >Academia: </label>
                        <input type="text" class="form-control" id="academia" name="academia" value=" {{ $docente->academia ?? '' }}" />
                        @if ($errors->has('academia'))
                            <div class="alert alert-warning p-2 mt-2" role="alert">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ $errors->first('academia') }}
                            </div>
                        @endif
                        <br />
                    </div>
                    <input type="hidden" name="id_rol" value="6">
                </div>
                
                <div class="row">
                    <div class="col-4">
                        <label for="nombre" class="form-label" >Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value=" {{ $docente->dato->nombre ?? '' }}"  />
                        @if ($errors->has('nombre'))
                            <div class="alert alert-warning p-2 mt-2" role="alert">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ $errors->first('nombre') }}
                            </div>
                        @endif
                        <br />
                    </div>
                    <div class="col-4">
                        <label for="ap_paterno" class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" value=" {{ $docente->dato->ap_paterno ?? '' }}" />
                        @if ($errors->has('ap_paterno'))
                            <div class="alert alert-warning p-2 mt-2" role="alert">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ $errors->first('ap_paterno') }}
                            </div>
                        @endif
                        <br />
                    </div>
                    <div class="col-4">
                        <label for="ap_materno" class="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" value="{{ $docente->dato->ap_materno ?? '' }}"/>
                        @if ($errors->has('ap_materno'))
                            <div class="alert alert-warning p-2 mt-2" role="alert">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ $errors->first('ap_materno') }}
                            </div>
                        @endif
                        <br />
                    </div>
                </div>

                <hr class="my-4">
                <div class="h2">Datos de Contacto</div>
                <div class="row">
                    <div class="col-6">
                        <label for="telefono" class="form-label" >Teléfono Casa: </label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ $docente->dato->telefono ?? '' }}"/>
                        @if ($errors->has('telefono'))
                            <div class="alert alert-warning p-2 mt-2" role="alert">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ $errors->first('telefono') }}
                            </div>
                        @endif
                        <br />
                    </div>
                    <div class="col-6">
                        <label for="celular" class="form-label">Celular: </label>
                        <input type="tel" class="form-control" id="celular" name="celular" value="{{ $docente->dato->celular ?? '' }}" />
                        @if ($errors->has('celular'))
                            <div class="alert alert-warning p-2 mt-2" role="alert">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ $errors->first('celular') }}
                            </div>
                        @endif
                        <br />
                    </div>
                </div>

                <hr class="my-4">
                <div class="h2">Datos de Usuario</div>
                <div class="row">
                    <div class="col-12">
                        <label for="email" class="form-label" >Correo electrónico: </label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $docente->user->email ?? '' }}"/>
                        @if ($errors->has('email'))
                            <div class="alert alert-warning p-2 mt-2" role="alert">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        <br />
                    </div>
        
                </div>

                <label for="estado" class="form-label">Estado: </label>
                <select  class="form-select" id="estado" name="estado">
                    <option value="1" {{ isset($docente->user->estado) && 1 === $docente->user->estado ? 'selected' : '' }}> Habilitado</option>
                    <option value="0" {{ isset($docente->user->estado) && 0 === $docente->user->estado ? 'selected' : '' }}> Deshabilitado</option>
                </select>
                <br />

                <div class="d-flex justify-content-end"> 
                    <a role="button" class="btn btn-danger text-end mx-2" href=" {{route('AdminPracticas.indexDocente')}} ">Cancelar</a>
                    <button type="submit" class="btn btn-light" >Editar Docente</button>
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
    activo = document.getElementById("Docente_Ver");
    activo.classList.add("active");
  </script>
@endsection