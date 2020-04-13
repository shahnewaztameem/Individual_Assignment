<?php

namespace App\Http\Middleware;

use Closure;

class VerifyMiddleware
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
        if($request->name!="Foyez")
        {
            return redirect('/home');
        }
        return $next($request);
    }
}
