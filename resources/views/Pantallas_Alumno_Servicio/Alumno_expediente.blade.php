@extends('Pantallas_Alumno_Servicio.Layout_Alumno.Layout_Alumno4')

@section('title', 'Subir Documentos')

@section('content')

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/estilo2.css')}}">

  <button type="button" class="seguimiento">
    <a href="{{ route('uploaddocexpediente.index') }}">
        <span class="material-icons">preview</span>
        Ver el seguimiento de mi solicitud </a></button>

  <h1 class="titulo">Documentos Requeridos <a  target="_blank">Para Registro</a> </h1>

  <table class="register">
    <thead>
        <tr>
            <th><h1><i class="bi bi-archive-fill"></i> Archivo</h1></th>
            <th><h1><i class="bi bi-file-earmark-pdf"></i> Tipo de Documento</h1></th>
            <th><h1><i class="bi bi-capslock-fill"></i> Subir Archivo </h1></th>

        </tr>
    </thead>
    <tbody>


        <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
            @csrf
                        <tr>
                            <td>
                                <div class="container-input">
                                    <input type="file" name="files[]" id="file-2" class="inputfile inputfile-2" multiple />
                                    <label for="file-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                    <span class="iborrainputfile">Seleccionar archivo</span>
                                    </label>
                                    </div>
                            </td>
                            <td>
                                <input type="text" class="inputdoc" name="documento" id="No_registro" value="ACTA DE NACIMIENTO ">
                                <textarea disabled rows="1" cols="1"class="nomDoc" > ACTA DE NACIMIENTO
                                </textarea>
                            <td><button type="submit" class="btn btn1" > Subir <br>Documento</button></td>

                        </tr>
        </form>


        <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
            @csrf
                            <tr>
                                <td>
                                    <div class="container-input">
                                        <input type="file" name="files[]" id="file-3" class="inputfile inputfile-2" multiple />
                                        <label for="file-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                        <span class="iborrainputfile">Seleccionar archivo</span>
                                        </label>
                                        </div>
                                </td>
                                <td>
                                    <input type="text" class="inputdoc" name="documento" value="CURP">
                                    <textarea disabled rows="1" cols="1"class="nomDoc" > CURP
                                    </textarea>
                                </td>
                                <td><button type="submit" class="btn btn1" > Subir<br> Documento</button> </td>

                            </tr>
        </form>

        <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
            @csrf
                        <tr>
                            <td>
                                <div class="container-input">
                                    <input type="file" name="files[]" id="file-4" class="inputfile inputfile-2" multiple />
                                    <label for="file-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                    <span class="iborrainputfile">Seleccionar archivo</span>
                                    </label>
                                    </div>
                            </td>
                            <td>
                                <input type="text" class="inputdoc" name="documento" value="NO. IMSS">
                                <textarea disabled rows="1" cols="1"class="nomDoc" > NO. IMSS
                                </textarea>
                            </td>
                            <td><button type="submit" class="btn btn1" > Subir<br> Documento</button> </td>

                        </tr>
        </form>

        <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
            @csrf
                        <tr>
                            <td>
                                <div class="container-input">
                                    <input type="file" name="files[]" id="file-5" class="inputfile inputfile-2" multiple />
                                    <label for="file-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                    <span class="iborrainputfile">Seleccionar archivo</span>
                                    </label>
                                    </div>
                            </td>
                            <td>
                                <input type="text" class="inputdoc" name="documento" value="DICTAMEN">
                                <textarea disabled rows="1" cols="1"class="nomDoc" > DICTAMEN
                                </textarea>
                            </td>
                            <td><button type="submit" class="btn btn1" > Subir <br>Documento</button> </td>

                        </tr>
        </form>

        <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
            @csrf
                        <tr>
                            <td>
                                <div class="container-input">
                                    <input type="file" name="files[]" id="file-6" class="inputfile inputfile-2" multiple />
                                    <label for="file-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                    <span class="iborrainputfile">Seleccionar archivo</span>
                                    </label>
                                    </div>
                            </td>
                            <td>

                                <input type="text" class="inputdoc" name="documento" value="CONSTANCIA ESCUELA">
                                <textarea disabled rows="1" cols="1"class="nomDoc" > CONSTANCIA ESCUELA
                                </textarea>
                            </td>
                            <td><button type="submit" class="btn btn1" > Subir<br> Documento</button> </td>

                      </tr>
        </form>

        <form method="POST" action="{{ route('uploaddocexpediente.store') }}" enctype="multipart/form-data">
            @csrf
                        <tr>
                            <td>
                                <div class="container-input">
                                    <input type="file" name="files[]" id="file-7" class="inputfile inputfile-2" multiple />
                                    <label for="file-7">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                    <span class="iborrainputfile">Seleccionar archivo</span>
                                    </label>
                                    </div>
                            </td>
                            <td>
                                <input type="text" class="inputdoc" name="documento" value="CARTA COMPROMISO">
                                <textarea disabled rows="1" cols="1"class="nomDoc" > CARTA COMPROMISO
                                </textarea>
                            </td>
                        <td><button type="submit" class="btn btn1" > Subir <br>Documento</button> </td>

                      </tr>
        </form>

    </tbody>
</table>




@endsection

@section('script')
<script src="{{asset('js/Pantallas_Alumno_Servicio/docs.js')}}"></script>


@endsection
