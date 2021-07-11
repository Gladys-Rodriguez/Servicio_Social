@extends('Pantallas_Alumno_Becas.navbar_Alumnos_BecasFormatos')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/estiloConvocatoria.css')}}">
@endsection

@section('content')

        <div class="container">
            

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/PDF.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Solicitud De Beca </h1>
                        <p> <a href="{{asset('doc/solicitud.pdf')}}" target="_blank">Visualizar</a> </p>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/DOCX.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Estado Socioeconómico </h1>
                        <p> <a href="{{asset('doc/estudio.docx')}}" target="_blank">Visualizar</a> </p>
                    
                    </div>
                </div>
            </div>



            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/becas/XLXS.jfif')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Carta Renuncia Beca </h1>
                        <p> <a href="{{asset('doc/renuncia.xlsx')}}" target="_blank">Visualizar</a> </p>
                    
                    </div>
                </div>
            </div>


        </div>
        @endsection