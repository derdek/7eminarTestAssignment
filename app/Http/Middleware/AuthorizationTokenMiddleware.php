<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthorizationTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->hasHeader('Authorization')) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $user = User::firstWhere(['api_token' => $request->header('Authorization')]);
        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        Auth::login($user);
        return $next($request);
    }
}
