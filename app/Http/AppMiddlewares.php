<?php

namespace App\Http;

use App\Http\Middleware\VerifiedMiddleware;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Laravel\Sanctum\Http\Middleware\CheckAbilities;
use Laravel\Sanctum\Http\Middleware\CheckForAnyAbility;

class AppMiddlewares
{
    public function __invoke(Middleware $middleware): void
    {
        $middleware->append(TrimStrings::class);
        $middleware->alias([
            'verified' => VerifiedMiddleware::class,
            'abilities' => CheckAbilities::class,
            'ability' => CheckForAnyAbility::class
            // Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestAreStateful::class;
        ]);
        $middleware->statefulApi();
    }
}
