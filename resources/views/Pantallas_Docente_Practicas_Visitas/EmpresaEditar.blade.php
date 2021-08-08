@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('title', 'Editar Empresa')

@section('content')

<section class="section-main">
    <h1>Editar la Empresa</h1>
</section>


<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border border-light rounded text-light">
        <div class="display-4 mb-4 mt-2"> <div class="d-inline text-warning"> <strong>Editar </strong></div>Datos de la Empresa:</div>

        <form action=" {{ route('docente.actualizarEmpresa',['empresa'=> $empresa]) }} " method="POST">
            @method('PUT')
            @csrf
            <label for="nombre" class="form-label ">Nombre de la Empresa: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value=" {{old('nombre') ?? $empresa->nombre ?? '' }} ">
            @if ($errors->has('nombre'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('nombre') }}
                </div>
            @endif
            <br />
        
            <label for="ciudad" class="form-label">Ciudad/Estado: </label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" value=" {{old('ciudad') ?? $empresa->direccion->ciudad ?? '' }} ">
            @if ($errors->has('ciudad'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('ciudad') }}
                </div>
            @endif
            <br />
        
            <label for="alcaldia" class="form-label">Alcaldía/Municipio: </label>
            <input type="text" class="form-control" id="alcaldia" name="alcaldia" value=" {{old('alcaldia') ?? $empresa->direccion->alcaldia ?? ''}} ">
            @if ($errors->has('alcaldia'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('alcaldia') }}
                </div>
            @endif
            <br />
        
            <label for="colonia" class="form-label" >Colonia: </label>
            <input type="text" class="form-control" id="colonia" name="colonia" value=" {{old('colonia') ?? $empresa->direccion->colonia ?? '' }}" >
            @if ($errors->has('colonia'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{$errors->first('colonia') }}
                </div>
            @endif
            <br />
            

            <div class="row">
                <div class="col-6">
                    <label for="calle" class="form-label" >Calle: </label>
                    <input type="text" class="form-control" id="calle" name="calle" value=" {{old('calle') ?? $empresa->direccion->calle ?? '' }}" >
                    @if ($errors->has('calle'))
                        <div class="alert alert-warning p-2 mt-2" role="alert">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('calle') }}
                        </div>
                    @endif
                    <br />
                </div>
                <div class="col-3">
                    <label for="num_ext"class="form-label">Núm Ext: </label>
                    <input type="text" class="form-control" id="num_ext" name="num_ext" value=" {{old('num_ext') ?? $empresa->direccion->num_ext ?? '' }}" >
                    @if ($errors->has('num_ext'))
                        <div class="alert alert-warning p-2 mt-2" role="alert">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('num_ext') }}
                        </div>
                    @endif
                    <br />
                    
                </div>
                <div class="col-3">
                    <label for="num_int"class="form-label" >Núm Int: </label>
                    <input type="text" class="form-control" id="num_int" name="num_int" value=" {{old('num_int') ?? $empresa->direccion->num_int ?? '' }} "  >
                    <br />
                </div>

            </div>
        
            <label for="cp" class="form-label">Código Postal: </label>
            <input type="text" class="form-control" id="cp" name="cp" value=" {{old('cp')?? $empresa->direccion->cp ?? ''  }}  " >
            @if ($errors->has('cp'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('cp') }}
                </div>
            @endif
            <br />
            
            <div class="d-flex justify-content-end"> 
                <a role="button" class="btn btn-danger text-end mx-2" href="{{ URL::previous() }}">Regresar</a>
                <button type="submit" class="btn btn-light" >Editar Empresa </button>
            </div>
            
        </form>
    </div>
</div>
