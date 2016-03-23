<?php

namespace App\Http\Middleware;

use Closure;
use Exception;

class ApiMiddleware
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
        if (!$request->wantsJson()) {
            throw new Exception("API requests must have 'Accept: application/json' header", 1);
        }

        return $next($request);
    }
}
