<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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
        Role = admin*/
        if (Auth::check() && Auth::user()->role == config('custom.role.admin'))
        {
            return $next($request);       
        }
        return redirect()->route('login');
    }
}
