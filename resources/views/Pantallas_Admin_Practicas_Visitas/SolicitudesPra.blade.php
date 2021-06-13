@extends('Pantallas_Admin_Practicas_Visitas.navbar_Solicitudes_Practicas_Visitas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilosSolicitudes.css')}}">
@endsection

@section('content')
@foreach($nuevo as $new)
<p>{{$new->fullname}}</p>
@endforeach
	
        @endsection