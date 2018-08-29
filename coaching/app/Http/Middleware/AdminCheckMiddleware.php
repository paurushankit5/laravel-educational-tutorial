<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminCheckMiddleware
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
        //if user is logeed in and user is a superuser then pass else redirect to home page
        if (Auth::check() && Auth::user()->is_superuser)
        {
            return $next($request);
        }
        return redirect('/');

    }
}
