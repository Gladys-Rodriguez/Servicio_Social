<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
     /* public function login(Request $request)
    {
        $credentials = array('email' => $request->email, 'password' => $request->password, "estado" => 1);
        if (Auth::attempt($credentials, false)) {

            return redirect()->intended('/');
        } else {
            //when echoing something here it is always displayed thus admin login is just refreshed.
            return redirect('/')->withInput()->with('message', 'Login Failed o cuenta desactivada');
        }
    }*/

    public function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

}
