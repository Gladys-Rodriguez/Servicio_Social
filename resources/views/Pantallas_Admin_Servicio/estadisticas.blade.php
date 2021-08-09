@extends('layouts.navbarAdminIndex2')


@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo4.css')}}">
@endsection

@section('content')

<div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
            <h3 class="title"><i class="fas fa-chart-bar"></i> Estadísticas Alumno Servicio Social </a> </h3>
            </div>
        </div>
        <div class="row mtop16">
                <div class="col-md-4">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="fas fa-school"></i> Alumnos Registrados </a> </h4>
                </div>
                <div class="inside">
                <div class="big_count">{{ $alumnos }}</div>
                </div>
            </div>
    </div>
    <div class="col-md-4">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="fas fa-school"></i> Alumnos en Proceso de Servicio Social </a> </h4>
                    </div>
                    <div class="inside">
                    <div class="big_count"> {{ $alumnosProceso }} </div>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="fas fa-user-graduate"></i> Alumnos con Servicio Social Finalizado </a> </h4>
                    </div>
                    <div class="inside">
                    <div class="big_count"> {{ $alumnosFinalizado }} </div>
                    </div>
            </div>
        </div>

    </div>

    <div class="panel shadow">
            <div class="header">
            <h3 class="title"><i class="fas fa-chart-bar"></i> Estadísticas Alumnos por Turno </a> </h3>
            </div>
        </div>

    <div class="row mtop16">
                <div class="col-md-3">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="fas fa-clock"></i> Alumnos Turno Matutino en Proceso </a> </h4>
                </div>
                <div class="inside">
                <div class="big_count"> {{ $alumnoMatutino }} </div>
                </div>
            </div>
    </div>

        <div class="col-md-3">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="fas fa-clock"></i> Alumnos Turno  Matutino Finalizado </a> </h4>
                </div>
                <div class="inside">
                <div class="big_count"> {{ $alumnoMatutinoFinalizado }} </div>
                </div>
            </div>
    </div>

    <div class="col-md-3">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="far fa-clock"></i> Alumnos Turno  Vespertino en Proceso </a> </h4>
                </div>
                <div class="inside">
                <div class="big_count"> {{ $alumnoVespertino }} </div>
                </div>
            </div>
    </div>


    <div class="col-md-3">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="far fa-clock"></i> Alumnos Turno Vespertino Finalizado </a> </h4>
                </div>
                <div class="inside">
                <div class="big_count"> {{ $alumnoVespertinoFinalizado }} </div>
                </div>
            </div>
    </div>

</div>

<div class="panel shadow">
            <div class="header">
            <h3 class="title"><i class="fas fa-calendar"></i> Estadísticas Alumnos por Semestre </a> </h3>
            </div>
        </div>

        <div class="row mtop16">
                <div class="col-md-4">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="fas fa-book"></i> Alumnos Cuarto Semestre </a> </h4>
                </div>
                <div class="inside">
                <div class="big_count"></div>
                </div>
            </div>
    </div>

                <div class="col-md-4">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="fas fa-book"></i> Alumnos Quinto Semestre </a> </h4>
                </div>
                <div class="inside">
                <div class="big_count"></div>
                </div>
            </div>
    </div>

                <div class="col-md-4">
                    <div class="panel shadow">
                    <div class="header">
                    <h4 class="title"><i class="fas fa-book"></i> Alumnos Sexto Semestre </a> </h4>
                </div>
                <div class="inside">
                <div class="big_count"></div>
                </div>
            </div>
    </div>



</div>






@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
