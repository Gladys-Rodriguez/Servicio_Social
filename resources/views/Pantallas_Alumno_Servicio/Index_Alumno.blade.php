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
@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Principales/Index_Alumno.js')}}"></script>
@endsection
