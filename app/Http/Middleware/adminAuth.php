<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class adminAuth
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
        if(Auth::guard('admin')->check() == true)
        {
            return $next($request);
        }else{
            return route('admin:login');
        }

    }
}
