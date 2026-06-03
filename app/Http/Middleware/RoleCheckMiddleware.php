<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , string ...$roles): Response
    {
        // check current user login
        if(!Auth::check()){
            return redirect('/login');
        }
        if(!in_array(Auth::user()->role,$roles)){
            abort(403,'user can not access to this page !');
        };
        return $next($request);
    }
}
