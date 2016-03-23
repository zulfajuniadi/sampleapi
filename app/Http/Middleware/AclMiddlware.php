<?php

namespace App\Http\Middleware;

use Closure;

class AclMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $aclClass)
    {
        $acl = new $aclClass($request);
        if (!$acl->run()) {
            return response()->json(['error' => 'Unauthorized.'], 403);
        }
        return $next($request);
    }
}
