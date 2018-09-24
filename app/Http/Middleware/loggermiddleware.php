<?php

namespace App\Http\Middleware;

use Closure;
use Log;
class loggermiddleware
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
        Log::info('provide log info of what is happening');
        return $next($request);
    }
}
