@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno4')

@section('title', 'Inicio Alumno')

@section('css')
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />

<link rel="stylesheet" href="{{asset('css/Pantallas_Alumno_Servicio/Index_Alumno.css')}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="css/video-js.css">
	<script src="js/video.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
@endsection

@section('content')
<div class="container-fluid bg-dark py-5" >
    <h2>Módulo de Servicio Social</h2>
<main>
<div class="contenedor">

        <section class="tm-section tm-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-bg-circle-white tm-flex-center-v">
                            <div class="text-center">
                                <h1 class="tm-site-title"></h1>
                                <p class="tm-site-subtitle">¡Bienvenido Al Control De Tu Servicio Social!</p>
                            </div>
                            <p>Previamente has hecho tu registro exitoso al servicio social, te pedimos, procedas a hacerlo en la pagina oficial del SISS</p>
                            <p class="text-center mt-4 mb-0">
                                <a data-scroll href="https://serviciosocial.ipn.mx" class="btn tm-btn-secondary">Continue...</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-2" class="tm-section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                        <h2 class="tm-color-secondary mb-4">FORMATOS DESCARGABLES</h2>
                        <p class="mb-4">Es necesario descargues los siguientes formatos para que puedas subirlos a la plataforma conforme te sean pedidos
                            por el departamento.
                        </p>

                    </div>


                    <div class="col-xl-7 col-lg-6 tm-circle-img-container">

                        <img src="/img/serviciosocial/ss_1.png" alt="Image" class="rounded-circle tm-circle-img">
                    </div>

                    <div class="table-responsive">
                        <table class="registro">
                        <thead>
                          <tr>
                            <th><h1 class="h1"><span class="material-icons">description</span>Documento</h1></th>
                            <th><h1><span class="material-icons">drive_file_rename_outline</span> Nombre del Formato</h1></th>
                            <th><h1><span class="material-icons">preview</span> Ver</h1></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($docs as $file)
                          <tr>

                            <td>{{ $file->nombre_doc }}</td>

                            <td class="text-uppercase">{{ $file->tipo_doc}}</td>
                            <td class="boton">
                              <a target="_blank" href="storage/formatos/{{ $file->nombre_doc }}" class="verificar "> Ver el formato</a>
                            </td>

                          </tr>
                          @endforeach
                        </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </section>

        <section id="tm-section-2" class="tm-section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                        <h2 class="tm-color-secondary mb-4">VIDEO TUTORIAL</h2>
                        <p class="mb-4">Para que tengas una guía de como realizar todo el proceso te dejamos el siguiente video tutorial.
                        </p>

                    </div>


                    <div class="col-xl-7 col-lg-6 tm-circle-img-container">

                        <img src="/img/serviciosocial/video.png" alt="Image" class="rounded-circle tm-circle-img">
                    </div>

                </div>
            </div>
        </section>



    </div>
</main>

                <!--<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
                    <source src="/img/videos/video_tutorial.mp4" type="video/mp4">
                </video>-->
                <p align="center">
                    @foreach($tuto as $file)
                <iframe width="900" height="500" src="{{$file->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen></iframe>
                    @endforeach

            </p>






</div>
@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Principales/Index_Alumno.js')}}"></script>
<script src="{{asset('js/Pantallas_Alumno_Servicio/Registros/NuevoRegistro.js')}}"></script>

<script>
    var reproductor = videojs('fm-video', {
        fluid: true
    });
</script>
@endsection
