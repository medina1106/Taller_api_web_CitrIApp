<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        /* Lo que no tenga comentario viene por defecto */
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                /* Modificado por ESPAÑA */
                if (Auth::user()->role == 'admin') {
                    /* Modificado por ESPAÑA */
                    return redirect()->route('Admin_H');
                    /* Modificado por ESPAÑA */
                } else {
                    /* Este retorno viene por defecto */
                    return redirect(RouteServiceProvider::HOME);
                }
            }
        }
        return $next($request);
    }
}
