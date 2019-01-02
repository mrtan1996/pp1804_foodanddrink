<?php

namespace App\Http\Middleware;

use Closure;

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
        if (Auth::check())
        {
            if (Auth::user()->role != config('custom.role.admin')) {
               return redirect()->route('admin.home');
            }

            return $next($request);       
        }
        return redirect()->route('login');
    }
}
