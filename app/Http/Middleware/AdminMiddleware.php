<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){

            $user = Auth::user();

            if($user->role->name == 'administrator'){
                return $next($request);
            }else{
                return redirect('/home');
            }
            
        }else{

            return redirect('/login');

        }

        return redirect('/');
    }
}
