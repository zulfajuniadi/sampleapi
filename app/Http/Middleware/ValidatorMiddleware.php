<?php

namespace App\Http\Middleware;

use Closure;

class ValidatorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $validationClass)
    {
        $validator = new $validationClass($request);
        $validation = $validator->run();
        if ($validation->fails()) {
            return response()->json([
                'error' => 'Validation error.',
                'errors' => $validation->errors()->all(),
            ], 400);
        }
        return $next($request);
    }
}
