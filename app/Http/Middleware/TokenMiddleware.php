<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $token_value, string $foo): Response
    {
        //$token = config('example.token'); это правильнее, т.к
        // после кеширования env() не будет работать, она вернет null
        //$token = env('TOKEN');
        $token = 'secret';

        if($request->input('token') === $token) {
            return $next($request);
        }

        if($request->input('token') === $token_value) {
            return $next($request);
        }
        abort(403);
    }
}
