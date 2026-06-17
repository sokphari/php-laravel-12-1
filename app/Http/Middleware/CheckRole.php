<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next , string ...$roles): Response
    {
        // user not authentication
        if(!Auth::check()){
            return response()->json([
                'message' => 'Unauthentication'
            ],401);
        }
        // check role
        if(!in_array(Auth::user()->roles,  $roles)){
            return response()->json([
                'message' => 'User not have Permission ',
            ],403);
        }
        //allow access 
        return $next($request);
    }
}
