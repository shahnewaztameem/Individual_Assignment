<?php

namespace App\Http\Middleware;

use Closure;

class PizzaMiddleware
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
        if($request->pizza!="Order Pizza")
        {
            return redirect('/pizza');

        }
        return $next($request);
    }
}
