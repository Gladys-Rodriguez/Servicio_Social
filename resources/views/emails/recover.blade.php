@extends('emails.barra')
@section('content')
<a href="https://ibb.co/wdfPGCG"><img src="https://i.ibb.co/p1SMVZV/recover.jpg" alt="recover" display="block" width="100%"></a>
<p> Hola: <strong> {{ $name }} </strong>   con el numero de boleta
:  <strong> {{ $id }} </strong> </p>
<p> Este es un correo que les ayudara a restablecer la contraseña en el sistema: </p>
<p> Para continuar  haga click en el siguiente botón e ingrese el siguiente código: <h2> {{ $code }} </h2> </p>
<p> <a href="{{ url('/reset?email='.$email) }}" style="display: inline-block; background-color: #2a9d8f; color: white; padding: 10px; border-radius 4px; text-decoration: none; "> Recuperar mi contraseña. </a></p>
<p> Si el botón anterior no funciona, copie y pegue el siguiente link en su navegador:</p>
<p> {{ url('/reset?email='.$email) }} </p>
@stop