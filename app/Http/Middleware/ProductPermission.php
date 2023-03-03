<?php

namespace App\Http\Middleware;

use Closure;

class ProductPermission
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
        echo 'Request product admin ';  
        return $next($request);
    }
}
