<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Checkrole
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
        
        /*khi dang nhap thanh cong: Auth::check()
        roles = admin*/
        if (Auth::check() && Auth::user()->roles == config('custom.roles.admin'))
        {
            return $next($request);       
        }
        return redirect()->route('login');
    }
}
