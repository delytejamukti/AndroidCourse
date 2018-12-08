<?php

namespace App\Http\Middleware;

use Closure;

class isAdvanced
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
        if(auth()->check() && $request->user()->advanced == 0){
            return redirect()->guest('home');
        }
        return $next($request);
    }
}
