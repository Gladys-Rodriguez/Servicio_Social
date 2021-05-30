@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno2')

@section('title', 'Registro')

@section('css')


<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Index_Alumno.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
@endsection

@section('content')
<main>
<section class="container">
    <div class="site-content">
        <div class="posts">

            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                        <img src="{{asset('img/Alumno/SS.jpg')}}" class="img" alt="blog1">
                    </div>
                    <!--<div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14, 2019</span>
                        <span>2 Commets</span>
                    </div>-->
                </div>
                <div class="post-title">
                    <a href="#">¿Qué es el Servicio Social? </a>
                    <p>
                    Es una actividad formativa que amplia tu información académica
                    y fomenta una conciencia de solidaridad con la sociedad.
                    Es de carácter temporal y obligatorio además de ser un requisito
                    indispensable para la titulación, que te permite obtener competencia laboral.
                    ..
                    </p>

                </div>
            </div>

            <hr>
        </div>

        <aside class="sidebar">
            <div class="category">
                <h2>---------</h2>
                <ul class="category-list">
                    <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                        <a href="{{url('/NuevoRegistro')}}"">Nuevo Registro</a>
                        <span><i class="fas fa-user text-gray"></i></span>
                    </li>
                    <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                        <a href="#">Descargar Formatos</a>
                        <span><i class="fas fa-user text-gray"></i></span>
                    </li>
                </ul>
            </div>
        </aside>

    </div>
</section>
</main>

<h3 style="color:rgb(218, 218, 218);">Tabla 1</h3>
<table class="table table-light" style="color:rgb(218, 218, 218);">

    <thead>
        <tr>

            <th width=10%>#</th>
            <th width=10%>id_alumnos</th>
            <th width=10%>carrera</th>
            <th width=10%>semestre</th>
            <th width=10%>grupo</th>
            <th width=10%>turno</th>
            <th width=10%>id_datos</th>
            <th width=10%>id_usuarios</th>
            <th width=10%>id_direccions</th>
            <th width=10%>Acciones</th>


            <th width=10%>Matricula</th>
            <th width=10%>email</th>

            <th width=10%>nombre</th>
            <th width=10%>AP_ Paterno</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno )
        @foreach ($users as $user)
        @foreach ($datos as $dato )
        <tr>
            <!-- Tabla Alumnos -->
            <td align="center">{{$loop->iteration}}</td>
            <td align="center">{{$alumno-> id_alumnos}}</td>
            <td align="center">{{$alumno-> carrera}}</td>
            <td align="center">{{$alumno-> semestre}}</td>
            <td align="center">{{$alumno-> grupo}}</td>
            <td align="center">{{$alumno-> turno}}</td>
            <td align="center">{{$alumno-> id_datos}}</td>
            <td align="center">{{$alumno-> id_usuarios}}</td>
            <td align="center">{{$alumno-> id_direccions}}</td>
            <td align="center">Editar | Borrar</td>

            <!-- Tabla Users -->
            <td align="center">{{$user-> id}}</td>
            <td align="center">{{$user-> email}}</td>

            <!-- Tabla Datos -->
            <td align="center">{{$dato-> nombre}}</td>
            <td align="center">{{$dato-> ap_paterno}}</td>

        </tr>

@endforeach
@endforeach
@endforeach
</tbody>
</table>
<br>
<h3 style="color:rgb(218, 218, 218);"> Tabla 2 </h3>
<table class="table table-light" style="color:rgb(218, 218, 218);">

    <thead>
        <tr>
            <th width=10%>nombre</th>
            <th width=10%>AP_ Paterno</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($datos as $dato )
        <tr>
            <td align="center">{{$dato-> nombre}}</td>
            <td align="center">{{$dato-> ap_paterno}}</td>
         </tr>

@endforeach
</tbody>
</table>


@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Principales/Index_Alumno.js')}}"></script>
@endsection
