
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==== CONTENIDO CSS === -->
    <link rel="stylesheet" href="{{asset('css/FormatosA.css')}}">
    <!-- ==== FIN CSS === -->


    <title>Formatos Administrativos</title>
</head>
<body>
    <div class="TituloFA">
        <p id="texto">FORMATOS ADMINISTRATIVOS </p>
    </div>

    <br>

    <div class="padre">
    <form method="POST" action="{{ route('user.files.store')  }}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="form-control" name="files[]" multiple>

                    <button type="submit" class="mt-4 btn btn-primary float-right"> Subir </button>
    </form>

        <div class="divboton">
            <button class="boton"><a href="{{url('/rela_inicio') }}" target="_blank">RELACIÓN DE INICIOS</a></button>
        </div>

        <div class="divboton">
        <button class="boton"><a href="http://laweb.com" target="_blank">RELACIÓN DE LIBERACIONES</a></button>
        </div>

        <div class="divboton">
        <button class="boton"><a href="http://laweb.com" target="_blank">DICTAMEN</a></button>
        </div>

        <div class="divboton">
        <button class="boton"><a href="http://laweb.com" target="_blank">CARTA DE TÉRMINO</a></button>
        </div>

        <div class="divboton">
        <button class="boton"><a href="http://laweb.com" target="_blank">SOLICITUD DE CONSTANCIA <br> A GESTIÓN ESCOLAR</a></button>
        </div>

        <div class="divboton">
        <button class="boton"><a href="http://laweb.com" target="_blank">OFICIO DE RESGUARDO</a></button>
        </div>
    </form>


    </form>

    </div>









</body>
</html>

