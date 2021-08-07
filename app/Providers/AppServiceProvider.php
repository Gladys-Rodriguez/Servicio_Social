<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\View;

use App\Models\dato;
use App\Models\Usuario;
use App\Models\alumno;
use App\Models\servicio;
use App\Models\dependencia;
use App\Models\direccion;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Paginator::useBootstrap();

        //


        //$boleta=$request->get('boleta');
        //$registro=DB::table('registros')->get();
        //view::share('registros', request()->input('boleta'));

       /* View::composer('*', function($view)
        {
            $view->with('registros', request()->input('boleta'));
        });*/

    }
}
