@extends('Pantallas_Admin_Becas.navbar_Tipo_Alumno_Becas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Becas/estilo2.css')}}">
@endsection

@section('content')

        <div class="container">
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valbecas/acta.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Acta de nacimiento </h1>
                        <p> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valbecas/curp.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> CURP  </h1>
                        <p>  </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valbecas/constancia.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Constancia de estudios </h1>
                        <p> </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valbecas/imss.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Comprobante IMSS </h1>
                        <p>  </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valbecas/estudio.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Estudio socioeconómico </h1>
                        <p>  </p>
                    
                    </div>
                </div>
            </div>



            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valbecas/solicitud.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Solicitud de beca </h1>
                        <p> </p>
                    
                    </div>
                </div>
            </div>


        </div>
        @endsection