<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureJsonContentType
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (!$request->isJson() && !$request->expectsJson()) {
            return response()->json(['error' => 'Invalid content type or Accept type. Only application/json is accepted.'], 415);
        }

        return $next($request);
    }
}
