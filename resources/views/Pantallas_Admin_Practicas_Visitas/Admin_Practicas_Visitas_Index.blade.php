@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno2')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_PracticasVisitas/estilo.css')}}">
@endsection

@section('content')
        <div class="container">
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/marinela.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Marinela </h1>
                        <p> <a href="{{asset('https://marinela.com.mx/')}}" target="_blank">Visitar Página Oficial</a> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/bimbo.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1> Bimbo </h1>
                        <p> <a href="{{asset('https://www.grupobimbo.com/es')}}" target="_blank">Visitar Página Oficial</a> </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/yakult.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Yakult </h1>
                        <p> <a href="{{asset('https://www.yakult.com.mx/')}}" target="_blank">Visitar Página Oficial</a> </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/pascual.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Pascual </h1>
                        <p><a href="{{asset('https://www.pascual.com.mx/')}}" target="_blank">Visitar Página Oficial</a>  </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/nestle.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Nestlé </h1>
                        <p><a href="{{asset('https://www.nestle.com.mx/')}}" target="_blank">Visitar Página Oficial</a>  </p>
                    
                    </div>
                </div>
            </div>

            
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/jumex.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <h1>  Jumex </h1>
                        <p> <a href="{{asset('http://www.jumex.com/')}}" target="_blank">Visitar Página Oficial</a> </p>
                    
                    </div>
                </div>
            </div>


        </div>
        @endsection 