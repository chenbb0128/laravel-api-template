<?php

namespace App\Http\Middleware\Admin;

use Closure;

/**
 * 自动区分admin guard
 * Class AdminGuardMiddleware
 * @package App\Http\Middleware\Admin
 */
class AdminGuardMiddleware
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
        config(['auth.defaults.guard' => 'admin']);
        return $next($request);
    }
}
