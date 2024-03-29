@extends('Pantallas_Alumno_Becas.navbar_Alumnos_Becas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/estiloConvocatoria.css')}}">
@endsection

@section('content')

        <div class="container">
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/institucional.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Beca Institucional </h1>
                        <p><a href="{{asset('https://www.ipn.mx/daes/becas/institucional.html')}}" target="_blank">Ver Requisitos</a> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/benito.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Beca Benito Juárez </h1>
                        <p><a href="{{asset('https://becasbenitojuarez.net/becas-benito-juarez-nivel-medio-superior/')}}" target="_blank">Ver Requisitos</a>  </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/excelencia.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Beca Excelencia </h1>
                        <p> <a href="{{asset('https://www.ipn.mx/daes/becas/beca-excelencia.html')}}" target="_blank">Ver Requisitos</a> </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/transporte.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Beca Transporte </h1>
                        <p> <a href="{{asset('https://www.ipn.mx/daes/becas/beca-transporte-ipn.html')}}" target="_blank">Ver Requisitos</a> </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/becalos.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Bécalos </h1>
                        <p> <a href="{{asset('https://www.ipn.mx/daes/becas/ipn-b%C3%A9calos.html')}}" target="_blank">Ver Requisitos</a> </p>
                    
                    </div>
                </div>
            </div>



            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/sibec.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  SIBEC </h1>
                        <p> <a href="{{asset('https://www.sibec.ipn.mx/')}}" target="_blank">Ir a página oficial SIBEC</a> </p>
                    
                    </div>
                </div>
            </div>


        </div>
        @endsection