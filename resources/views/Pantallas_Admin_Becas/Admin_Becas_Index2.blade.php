@extends('Pantallas_Admin_Becas.navbar_Admin_Becas_Index2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Becas/estilo3.css')}}">
@endsection

@section('content')

        <div class="container">
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas2/calendario.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p><a href="{{asset('https://www.ipn.mx/assets/files/main/docs/inicio/cal-Escolarizada-20-21.pdf')}}" target="_blank"><h1> Calendario escolar</h1></a> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas2/convocatoria.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p><a href="{{asset('https://mextudia.com/becas/ipn/')}}" target="_blank"><h1> Convocatorias </h1></a>  </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas2/comunicado.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p> <a href="{{asset('https://www.ipn.mx/assets/files/cecyt13/docs/inicio/noticias/01atebec2310.pdf')}}" target="_blank"><h1>  Comunicados informativos </h1></a> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas2/reglamento.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p><a href="{{asset('https://www.ipn.mx/assets/files/daes/docs/Becas/Normatividad/Reglamento.pdf')}}" target="_blank"><h1> Reglamento general de becas </h1></a>  </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas2/lineamientos.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p><a href="{{asset('https://www.ipn.mx/assets/files/daes/docs/Becas/Normatividad/Lineamientos.pdf')}}" target="_blank"><h1> Lineamientos para la operación de becas </h1></a>  </p>
                    
                    </div>
                </div>
            </div>



            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas2/sibec.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p> <a href="{{asset('https://www.sibec.ipn.mx/')}}" target="_blank"><h1>  SIBEC </h1></a> </p>
                    
                    </div>
                </div>
            </div>

            


        </div>
        @endsection