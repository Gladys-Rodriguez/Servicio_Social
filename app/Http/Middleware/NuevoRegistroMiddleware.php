<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\Usuario;
use App\Models\alumno;
use App\Models\servicio;

class NuevoRegistroMiddleware
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
        $id_users = Auth::user()->id;
       $id_alumnos=alumno::where('id_usuarios',$id_users)->take(1);

        if(DB::table('servicios')-> ('id_alumnos' == 1))
        {
            return redirect('Inicio Alumno');
        }
        else{
            return $next($request);

        }


    }
}
