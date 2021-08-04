@extends('Pantallas_Admin_Servicio.navbarAdminServicio')

@section('title', 'Subir Formatos')

@section('css')

<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
    />
<link rel="stylesheet" href="{{asset('css/Pantallas_Admin_Servicio/formatos.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@endsection

@section('content')
<div class="container-fluid py-5" >
    <h1>Subir Formatos Para Descarga </h1>
    <div class="table-responsive">
        <table class="register">
            <form method="POST" action="{{ route('UploadFormato.store') }}" enctype="multipart/form-data">
                @csrf
            <thead>
                <tr>
                    <th><h1><span class="material-icons">manage_search</span> Archivo</h1></th>
                        <td>
                            <div class="container-input">
                                <input type="file" name="files[]" id="file-7" class="inputfile inputfile-2" multiple />
                                <label for="file-7">
                                <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                <span class="iborrainputfile">Seleccionar archivo</span>
                                </label>
                                </div>
                        </td>
                </tr>
                <tr>
                    <th><h1><span class="material-icons">mode_edit_outline</span>Nombre del formato</h1></th>
                        <td>
                            <textarea rows="3" cols="1" class="formato" name="nomDoc"></textarea></td>

                        </td>
                </tr>
                <tr>
                    <th><h1><span class="material-icons">cloud_upload</span> Subir Formato </h1></th>
                    <td>
                        <button type="submit" class="btn btn1" >
                        <span class="material-icons">file_upload</span>Cargar</button>
                    </td>
                </tr>


            </thead>
            </form>
        </table>
    </div>



    <div class="table-responsive">
        <table class="registro">
        <thead>
          <tr>
            <th><h1 class="h1"><span class="material-icons">description</span>Documento</h1></th>
            <th><h1><span class="material-icons">drive_file_rename_outline</span> Nombre del Formato</h1></th>
            <th><h1><span class="material-icons">preview</span> Ver</h1></th>
            <th><h1><span class="material-icons">delete_forever</span>Eliminar</h1></th>
          </tr>
        </thead>
        <tbody>
          @foreach($docs as $file)
          <tr>

            <td>{{ $file->nombre_doc }}</td>

            <td class="text-uppercase">{{ $file->tipo_doc}}</td>
            <td class="btn">
              <a target="_blank" href="storage/formatos/{{ $file->nombre_doc }}" class="verificar "> Ver el formato</a>
            </td>
            <td><form action="{{ route('eliminarFormato.destroy',$file->id) }}" method="POST">
              @method('DELETE')
              @csrf
              <button class="eliminar">
                  <a> Eliminar</a>
              </button>
            </form></td>
          </tr>
          @endforeach
        </tbody>
        </table>
      </div>


</div>

@endsection

@section('script')
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>

<script src="{{asset('js/Pantallas_Alumno_Servicio/docs.js')}}"></script>


@endsection
