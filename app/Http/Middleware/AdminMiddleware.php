<?php

namespace App\Http\Middleware;
use Closure;

class AdminMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->role_id != 1){
            return back();
        }
         return $next($request);
        
    }
}
