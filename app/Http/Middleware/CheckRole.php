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
        $user = $request->user(); //current login

        if (!$user) {
            return response()->json([
                'message' => 'Unauthenticated'
            ], 401);
        }

        $roleName = optional($user->roles)->roles_name;

        if (!$roleName || !in_array($roleName, $roles, true)) {
            return response()->json([
                'message' => 'User does not have permission',
            ], 403);
        }

        return $next($request);
    }
}
