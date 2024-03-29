<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Practicas
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->estado = 0) {
            return redirect('Registro_exitoso');
        }
        else {
        switch(auth::user()->id_rol){
            case ('1'):
                return redirect('/Index_Master');//si es super administrador continua al HOME
            break;
			case('2'):
                return redirect('AdminIndex');// si es un usuario de servicio social
			break;
            case ('3'):
                return redirect('/Admin_Becas_Index3');//si es administrador de becas
            break;
            case ('4'):
                return $next($request);//si es administrador de practicas
            break;
            case ('5'):
                return redirect('/Index_Alumno');//si es alumno
            break;
            case ('6'):
                return redirect('/VisitasEscolares');//si es docente
            break;
            case ('7'):
                return redirect('/Index_Master');//si es prueba
            break;

        }
    }
    }
}
