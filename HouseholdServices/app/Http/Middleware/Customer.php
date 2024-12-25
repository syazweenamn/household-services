<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Customer
{
    public function handle(Request $request, Closure $next): Response
    {
        abort_if(\Auth::user()->role->roleName != 'Customer', 403, "Action is not allowed");
        return $next($request);
    }
}
