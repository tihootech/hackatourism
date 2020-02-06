<?php

namespace App\Http\Middleware;

use Closure;

class ArtisanCheck
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
        if (isMaster() || isArtisan()) {
            return $next($request);
        }else {
            abort(403);
        }
    }
}
