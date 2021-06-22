@extends('emails.barra')
@section('content')
<a href="https://ibb.co/wdfPGCG"><img src="https://i.ibb.co/p1SMVZV/recover.jpg" alt="recover" display="block" width="100%"></a>
<p> Hola: usuario  con el numero de boleta:  <strong> {{ $id }} </strong> </p>
<p><h2> {{$password}} </p></a>
<p> Este es un correo que les ayudara a restablecer la contraseña en el sistema: </p>
<p> Para iniciar sesión haga click en el siguiente botón> </p>
<p> <a href="{{ url('/login') }}" style="display: inline-block; background-color: #2a9d8f; color: white; padding: 10px; border-radius 4px; text-decoration: none; "> Recuperar mi contraseña. </a></p>
<p> Si el botón anterior no funciona, copie y pegue el siguiente link en su navegador:</p>
<p> {{ url('/login') }} </p>
@stop