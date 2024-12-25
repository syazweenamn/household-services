<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->role->roleName == "Admin") {
                return redirect(RouteServiceProvider::ADMIN);
            }
            elseif (Auth::guard($guard)->check() && Auth::user()->role->roleName == "Customer") {
                return redirect(RouteServiceProvider::CUSTOMER);
            }
        }

        return $next($request);
    }
}
