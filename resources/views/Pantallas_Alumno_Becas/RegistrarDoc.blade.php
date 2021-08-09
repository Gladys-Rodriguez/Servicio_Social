@extends('Pantallas_Alumno_Becas.navbar_Alumnos_MiBeca')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/estiloMiBeca.css')}}">
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/font-awesome.css')}}">    
@endsection

@section('content')
@foreach($doc as $dd)
<table class="table">
					<caption>Adjuntar Documento</caption>
					<thead>
							<tr>    
									<th>Documento</th>
									<th>Archivo</th>
									<th></th>
							</tr>
					</thead>
                    <tbody>
                    <form action="{{route('documento.guardarDoc')}}" method="POST" enctype="multipart/form-data">

                        <tr>
                       <td>@csrf
                           <select name="nombre_doc" id="">
                               <option value="Curp">Curp</option>
                               <option value="Acta de nacimiento">Acta de nacimiento</option>
                               <option value="Estudio Socioeconomico">Estudio Socioeconomico</option>
                               <option value="Identificación">Identificación</option>
                               <option value="Comprobante de ingreso">Comprobante de ingreso</option>
                               <option value="Comprobante de egreso">Comprobante de egreso</option>
                           </select>
                        <input type="hidden" name="solicitud_id" value="{{$dd->id}}"></td>
                        <td><input type="file" name="ruta" accept="application/pdf"></td>
                        <td>
                            <button type="sumbit" class="boton_personalizado1">Enviar</button>
                        </form></td> 
                        </tr>

@endforeach

@endsection