<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleWare
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
        if(auth()->check() && auth()->user()->per==0)
        {
            return $next($request);
        }
        else
        {
            abort(403);
        }
    }
}
