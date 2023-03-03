<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Auth;
use Throwable;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $token = $request->bearerToken();
            $decoded = JWT::decode($token, new Key($_ENV['KEY'], 'HS256'));
            //$decoded->email === $request->email
            http_response_code(204);
            return $next($request);
        } catch (Throwable $e) {
            echo json_encode($e->getMessage());
            http_response_code(401);
            die();
        }
    }
}
