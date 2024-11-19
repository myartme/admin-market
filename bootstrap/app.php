<?php

use App\Http\AppErrors;
use App\Http\AppMiddlewares;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->name('auth.')
                ->group(base_path('routes/auth.php'));
        }
    )
    ->withMiddleware(new AppMiddlewares())
    ->withExceptions(new AppErrors())
    ->create();
