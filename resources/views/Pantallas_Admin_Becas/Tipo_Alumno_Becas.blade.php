@extends('Pantallas_Admin_Becas.navbar_Tipo_Alumno_Becas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Becas/estilo2.css')}}">
@endsection

@section('content')

        <div class="container">
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/institucional.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Alumnos con beca 
                        "Institucional" </h1>
                        <p> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/becalos.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Alumnos con beca 
                        "Bécalos"  </h1>
                        <p>  </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/benito.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Alumnos con beca 
                        "Benito Juárez" </h1>
                        <p> </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/excelencia.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Alumnos con beca
                        de "Excelencia" </h1>
                        <p>  </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/transporte.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Alumnos con beca
                        de "Transporte" </h1>
                        <p>  </p>
                    
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/transicion.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Alumnos con beca 
                        de "Transición" </h1>
                        <p> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/deportiva.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Alumnos con beca 
                        "Deportiva" </h1>
                        <p> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/beifi.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Alumnos con beca 
                        "BEIFI" </h1>
                        <p> </p>
                    
                    </div>
                </div>
            </div>


        </div>
        @endsection