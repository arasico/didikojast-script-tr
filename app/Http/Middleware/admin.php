<?php

namespace App\Http\Middleware;

use Closure;

class admin
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
        if (!\Auth::check())
            return redirect('/');
        if (\Auth::user()->type != "admin")
            return redirect('/');
        return $next($request);
    }
}
