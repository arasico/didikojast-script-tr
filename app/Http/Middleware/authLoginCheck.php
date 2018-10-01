<?php

namespace App\Http\Middleware;

use Closure;

class authLoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::check()) {
            if (\Auth::user()->type == "admin")
                return redirect('/dashboard');
            else
                return redirect('/');
        }
        return $next($request);
    }
}
