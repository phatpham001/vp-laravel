<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginAdmin
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
        echo 'Middleware check  ';

        // if(!$this->isLogin()){
        //     return redirect(route('home'));
        // }
        return $next($request);
    }


    public function isLogin(){
        return false;
    }
}
