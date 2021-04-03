@extends('Pantallas_Admin_Practicas_Visitas.navbar_Validacion_Practicas_Visitas')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilo.css')}}">
@endsection

@section('content')
        <div class="container">
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valpracticas/calendario.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p><a href="{{asset('https://www.ipn.mx/assets/files/main/docs/inicio/cal-Escolarizada-20-21.pdf')}}" target="_blank"> <h1> Calendario de visitas </h1> </a> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valpracticas/requisitos.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p>  <a href="{{asset('https://www.ipn.mx/assets/files/secgeneral/docs/Memorias/MemoriaAnual2016/NMS/CECyT13.pdf')}}" target="_blank"> <h1> Requerimientos de empresas </h1> </a></p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valpracticas/solicitud.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p><a href="{{asset('https://www.cecyt13.ipn.mx/assets/files/cecyt13/docs/conocenos/certificacion/19PRAVIS.pdf')}}" target="_blank"> <h1> Solicitud de visita </h1> </a></p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valpracticas/informe1.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p> <a href="{{asset('https://www.cecyt13.ipn.mx/assets/files/cecyt13/docs/conocenos/certificacion/18CONDOCEXT.pdf')}}" target="_blank"> <h1> Informe de visita </h1> </a> </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valpracticas/informe2.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p> <a href="{{asset('https://www.cecyt13.ipn.mx/assets/files/cecyt13/docs/conocenos/certificacion/18CONDOCEXT.pdf')}}" target="_blank"> <h1> Informe de visita concluida </h1> </a></p>
                    
                    </div>
                </div>
            </div>

            
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/valpracticas/comprobante.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p> <a href="{{asset('https://www.cecyt13.ipn.mx/assets/files/cecyt13/docs/conocenos/certificacion/19PRAVIS.pdf')}}" target="_blank"> <h1> Documentos comprobatorios </h1> </p>
                    
                    </div>
                </div>
            </div>


        </div>
        @endsection