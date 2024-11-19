<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifiedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() /*|| !auth()->user()->hasVerifiedEmail()*/) {
            logger('User '.auth()->user().' can\'t login.'.' Email is not verified');
            return redirect()->route('auth.login.create');
        }

        return $next($request);
    }
}
