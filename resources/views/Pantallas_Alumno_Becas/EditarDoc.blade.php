@extends('Pantallas_Alumno_Becas.navbar_Alumnos_MiBeca')

@section('css')
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/estiloMiBeca.css')}}">
<link rel="stylesheet" href="{{asset('css/Pantalla_Alumno_Becas/font-awesome.css')}}">    
@endsection

@section('content')
<table class="table">
					<caption>Editar Documento</caption>
					<thead>
							<tr>    
									<th>Documento</th>
									<th>Archivo</th>
									<th></th>
							</tr>
					</thead>
                    <tbody>  
                    @forelse($doc as $dd) 
                    <form action="/EditarDoc1/{{$datos->id}}" method="POST" enctype="multipart/form-data">

                    <tr>
                       <td>@csrf
                           
                       <input type="hidden" name="_method" value="PUT">
                       <input type="hidden" name="solicitud_id" value="{{$dd->id}}">
                           <select name="nombre_doc" id="">
                               <option value="Curp">Curp</option>
                               <option value="Acta de nacimiento">Acta de nacimiento</option>
                               <option value="Estudio Socioeconomico">Estudio Socioeconomico</option>
                               <option value="Identificación">Identificación</option>
                               <option value="Comprobante de ingreso">Comprobante de ingreso</option>
                               <option value="Comprobante de egreso">Comprobante de egreso</option>
                           </select></td>
                        <td><input type="file" name="ruta" accept="application/pdf"></td>
                        <td>
                            <button type="sumbit" class="boton_personalizado1">Enviar</button>
                        </form></td> 
                        </tr>
                        @empty
                        @endforelse
</table>
@endsection