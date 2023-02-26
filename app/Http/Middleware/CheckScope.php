<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckScope
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$scopes)
    {
        if (!$request->user()->tokenCan($scopes)) {
            return response()->json(['error' => 'Forbidden'], 403);
        }

        return $next($request);
    }
}
