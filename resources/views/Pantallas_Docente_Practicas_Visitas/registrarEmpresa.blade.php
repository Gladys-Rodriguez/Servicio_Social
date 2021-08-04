@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Registra tu empresa</h1>
</section>


<div class="container-fluid bg-dark py-5">
    <div class="container p-5 border border-light rounded text-light">
        <div class="display-4 mb-4 mt-2">Registra la <div class="d-inline text-warning"> <strong>Empresa</strong></div>:</div>

        <form action="{{ route('docente.guardarEmpresa') }}" method="POST">
            @csrf
            <label for="nombre" class="form-label ">Nombre de la Empresa </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value=" {{old('nombre')}} ">
            @if ($errors->has('nombre'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('nombre') }}
                </div>
            @endif
            <br />
        
            <label for="ciudad" class="form-label">Alcaldía/Municipio: </label>
            <select  class="form-select" id="ciudad" name="ciudad">
                <option value="CDMX" {{old('ciudad') == "CDMX" ? 'selected' : '' }}  >CDMX</option>
                <option value="Edo México" {{old('ciudad') == "Edo México" ? 'selected' : '' }} >Edo. México</option>
            </select>
            <br />
        
            <label for="alcaldia" class="form-label">Alcaldía/Municipio: </label>
            <input type="text" class="form-control" id="alcaldia" name="alcaldia" value=" {{old('alcaldia')}} ">
            @if ($errors->has('alcaldia'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('alcaldia') }}
                </div>
            @endif
            <br />
        
            <label for="colonia" class="form-label" >Colonia: </label>
            <input type="text" class="form-control" id="colonia" name="colonia" value=" {{old('colonia')}}" >
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
                    <input type="text" class="form-control" id="calle" name="calle" value=" {{old('calle')}}" >
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
                    <input type="text" class="form-control" id="num_ext" name="num_ext" value=" {{old('num_ext')}}" >
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
                    <input type="text" class="form-control" id="num_int" name="num_int" value=" {{old('num_int')}}"  >
                    <br />
                </div>

            </div>
        
            <label for="cp" class="form-label">Código Postal: </label>
            <input type="text" class="form-control" id="cp" name="cp" value=" {{old('cp')}}" >
            @if ($errors->has('cp'))
                <div class="alert alert-warning p-2 mt-2" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    {{ $errors->first('cp') }}
                </div>
            @endif
            <br />
            
            <div class="d-flex justify-content-end"> 
                <a role="button" class="btn btn-danger text-end mx-2" href="{{route('docente.mostrarEmpresas')}}">Cancelar</a>
                <button type="submit" class="btn btn-light" >Registrar Empresa </button>
            </div>
            
        </form>
    </div>
</div>

@endsection