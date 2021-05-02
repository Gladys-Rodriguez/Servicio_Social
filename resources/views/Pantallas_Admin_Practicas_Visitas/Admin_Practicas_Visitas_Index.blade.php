@extends('Pantallas_Admin_Practicas_Visitas.navbar_Admin_Practicas_Visitas_Index')

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
                        <p> <a href="{{asset('https://marinela.com.mx/')}}" target="_blank"><h1> Marinela </h1></a> </p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/bimbo.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p> <a href="{{asset('https://www.grupobimbo.com/es')}}" target="_blank"><h1> Bimbo </h1></a> </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/yakult.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p> <a href="{{asset('https://www.yakult.com.mx/')}}" target="_blank"><h1>  Yakult </h1></a></p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/pascual.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p><a href="{{asset('https://www.pascual.com.mx/')}}" target="_blank"><h1>  Pascual </h1></a>  </p>
                    
                    </div>
                </div>
            </div>


            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/nestle.jpg')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p><a href="{{asset('https://www.nestle.com.mx/')}}" target="_blank"><h1>  Nestlé </h1></a>  </p>
                    
                    </div>
                </div>
            </div>

            
            <div class="card">
                <div class=imgBx>
                    <img src="{{asset('img/lugarespracticas/jumex.png')}}" alt="">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                        <p> <a href="{{asset('http://www.jumex.com/')}}" target="_blank"><h1>  Jumex </h1></a> </p>
                    
                    </div>
                </div>
            </div>


        </div>
        @endsection 