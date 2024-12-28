<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        info($request->url(), $request->all());

        return $next($request);
    }
}
