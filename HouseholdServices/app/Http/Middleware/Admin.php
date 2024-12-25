<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        abort_if(\Auth::user()->role->roleName != 'Admin', 403, "Action is not allowed");
        return $next($request);
    }
}
