<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Practicas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->rol){
            case ('1'):
                return redirect('/SuperAdmin_Index');//si es super administrador continua al HOME
            break;
			case('2'):
                return redirect('AdminIndex');// si es un usuario de servicio social
			break;
            case ('3'):
                return redirect('/Admin_Becas_Index');//si es administrador de becas
            break;
            case ('4'):
                return $next($request);//si es administrador de practicas
            break;
            case ('5'):
                return redirect('/Index_gnral');//si es alumno
            break;
            case ('6'):
                return redirect('/Docente_Index');//si es docente
            break;

        }
    }
}
