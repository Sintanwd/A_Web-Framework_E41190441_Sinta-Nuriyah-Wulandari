<?php

namespace App\Http\Middleware;
namespace Illuminate\Session\Middleware;

use Closure;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->age <= 200) {
            return redirect('home');
        }
        return $next($request);
    }
}

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {

        return $next($request);
    }
}

class AfterMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $next($response);
    }
}

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            //
        }
        return $next($request);
    }
}

class StarSession
{
    public function handle($request, Closure $next)
    {
        return $next($request);

    }
    public function terminate($request, $response)
    {
        //
    }
}