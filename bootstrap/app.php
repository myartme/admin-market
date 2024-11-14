<?php

use App\Http\Middleware\VerifiedMiddleware;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware(['guest', 'web'])
                ->name('auth.')
                ->group(base_path('routes/guest.php'));
            Route::middleware(['auth', 'web'])
                ->name('auth.')
                ->group(base_path('routes/auth.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(TrimStrings::class);
        $middleware->alias([
            'verified' => VerifiedMiddleware::class,
        ]);
        $middleware->redirectGuestsTo(fn () => route('auth.login.create'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
