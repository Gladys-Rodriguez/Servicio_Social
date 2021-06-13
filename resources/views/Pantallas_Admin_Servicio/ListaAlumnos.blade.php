@extends('layouts.navbarAdminIndex2')

@section('title', 'LOGIN')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/ListaAlumnos.css')}}">
@endsection

@section('content')
<h1><span class="blue"></span><span class="blue"></span> <span class="yellow"></span></h1>
    <h2>Listado <a href="https://github.com/pablorgarcia" target="_blank">de Alumnos</a></h2>

    <table class="container">
        <thead>
            <tr>
                <th><h1>Matricula </h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Apellido Paterno</h1></th>
                <th><h1>Apellido Materno</h1></th>
                <th><h1>Carrera</h1></th>
                <th><h1>Estado </h1></th>
            </tr>
        </thead>
        <tbody>
           <!-- <tr>
                <td>Google</td>
                <td>9518</td>
                <td>6369</td>
                <td>01:32:50</td>
                <td></td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td>7326</td>
                <td>10437</td>
                <td>00:51:22</td>
                <td></td>
            </tr>
            <tr>
                <td>Amazon</td>
                <td>4162</td>
                <td>5327</td>
                <td>00:24:34</td>
                <td></td>
            </tr>
        <tr>
                <td>LinkedIn</td>
                <td>3654</td>
                <td>2961</td>
                <td>00:12:10</td>
                <td></td>
            </tr>
        <tr>
                <td>CodePen</td>
                <td>2002</td>
                <td>4135</td>
                <td>00:46:19</td>
                <td></td>
            </tr>
        <tr>
                <td>GitHub</td>
                <td>4623</td>
                <td>3486</td>
                <td>00:31:52</td>
                <td></td>
            </tr>
        -->
        @foreach ($servicios as $servicio )
                            <tr>
                                <td>{{$servicio->id_usuarios}}</td>
                                <td>{{$servicio->nombre}}</td>
                                <td>{{$servicio->ap_paterno}}</td>
                                <td>{{$servicio->ap_materno}}</td>
                                <td>{{$servicio->carrera}}</td>
                            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
