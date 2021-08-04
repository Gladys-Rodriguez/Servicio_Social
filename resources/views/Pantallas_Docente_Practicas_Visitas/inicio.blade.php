@extends('Pantallas_Docente_Practicas_Visitas.Layout.navbarDocente')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Docente_PracticasVisitas/estilosVisitasEscolares.css')}}"/>
@endsection

@section('content')

<section class="section-main">
    <h1>Bienvenido a Prácticas y Visitas Escolares
    <br> Usuario con matricula: {{ Auth::user()->id}}</h1>
</section>

<div class="container-fluid d-grid bg-dark p-5 text-white gap-4" >
    <div class="row"> 
        <div class="col">
            <div class="border rounded p-3" style="min-height: 500px"> 
                <div class="display-4 text-center">Calendario de Visitas</div>
            </div>
        </div>
    </div>
    <div class="row"  >
        <div class="col ">
            <div class="border rounded p-3 bg-white text-dark" style="min-height: 500px"> 
                <div class="h2">Formatos Plantilla</div>
                <hr class="m-3">
                <ul class="list-group">
                    @forelse ($plantillas as $plantilla)
                        <li class="list-group-item  list-group-item-action list-group-item-dark">
                                <a class="text-decoration-none text-dark" href=" @php echo \Illuminate\Support\Facades\Storage::url($plantilla->ruta) @endphp">
                                    {{ $plantilla->nombre }} 
                                </a>
                        </li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="border rounded p-3 bg-white text-dark" style="min-height: 500px"> 
                <div class="h2">Formatos de Ejemplo</div>
                <hr class="m-3">
                <ul class="list-group">
                    @forelse ($ejemplos as $ejemplo)
                        <li class="list-group-item list-group-item-action list-group-item-secondary">
                            <a class="text-decoration-none text-dark" href=" @php echo \Illuminate\Support\Facades\Storage::url($ejemplo->ruta) @endphp">
                                {{ $ejemplo->nombre }} 
                            </a>
                        </li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>

    </div>
</div>
<script>
    var activos = document.getElementsByClassName("active");
    for (var i = 0; i<activos.length; i++) {
        activos[i].classList.remove("active");
    }
    var activo = document.getElementById("inicio");
    activo.classList.add("active");
</script>
@endsection
