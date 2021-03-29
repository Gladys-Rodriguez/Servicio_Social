<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==== CONTENIDO CSS === -->
    <link rel="stylesheet" href="{{asset('css/Comunicados.css')}}">
    <!-- ==== FIN CSS === -->


    <title>COMUNICADOS</title>
</head>
<body>
    <div class="TituloFA">
        <p id="texto">COMUNICADOS </p>
    </div>

    <br>

    <div class="padre">
        <ul class="slider">
        <li id="slide1">
        <img src="{{ asset('img/carrusel/1.jpeg')}}">
        </li>

        <li id="slide2">
        <img src="{{ asset('img/carrusel/2.png')}}">
        </li>

        <li id="slide3">
        <img src="{{ asset('img/carrusel/3.jpg')}}">
        </li>

        </ul>

        <ul class="menu">
            <li>
                <a href="#slide1">1</a>
            </li>
            <li>
                <a href="#slide2">2</a>
            </li>
            <li>
                <a href="#slide3">3</a>
            </li>
        </ul>

    </div>
