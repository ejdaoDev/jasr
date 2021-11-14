<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware {

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (auth()->user()->role->name == 'USER' || auth()->user()->role->name == 'ADMIN') {
            return $next($request);
        }
        return back();
    }

}
