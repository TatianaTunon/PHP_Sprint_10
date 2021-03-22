<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class dateMiddleware
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
        echo '<h5>' . date("d.m.y") . '</h5>'; //Imprime la hora en todas las vistas (definido a nivel global o controlador)
        return $next($request);
    }
}

  
