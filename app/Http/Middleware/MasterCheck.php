<?php

namespace App\Http\Middleware;

use Closure;

class MasterCheck
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
        if (isMaster()) {
            return $next($request);
        }else {
            abort(403);
        }
    }
}
