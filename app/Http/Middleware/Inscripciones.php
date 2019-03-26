<?php

namespace App\Http\Middleware;

use Closure;

class Inscripciones
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
        if(true){
        return $next($request);    
        }
        return response('No puedes continuar',404);
    }
}
