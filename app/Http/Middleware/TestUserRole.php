<?php

namespace App\Http\Middleware;

use Closure;

class TestUserRole
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
        // dd(\Auth::user()->is_admin);
        if(\Auth::user()->is_admin === false)
            return redirect('/user/detaljnije');
        return $next($request);
    }
}
