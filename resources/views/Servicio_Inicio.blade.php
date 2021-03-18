@extends('layouts.layout')

@section('title', 'Servicio')


@section('content')

<!-- Aquí va contenido -->


        <!-- Metodo Get sin validar nada -->
        <form class="box_acceso" action="{{ url('/Servicio') }}" method="GET">
            @csrf
            <h1> Acceso </h1>
            <input type="text" name="" placeholder="No. De Boleta">
            <input type="text" name="" placeholder="No. De Registro">
        <input type="submit" name="" value="Ingresar">
        </form>



<!-- Fin contenido -->
@endsection



