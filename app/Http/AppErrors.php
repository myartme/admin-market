<?php

namespace App\Http;

use App\ApiResponse;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Http\Request;

class AppErrors
{
    use ApiResponse;

    public function __invoke(Exceptions $exceptions): void
    {
        $exceptions->render(function (AuthenticationException $e, Request $request) {
            if ($request->is('api/*')){
                return $this->unauthorizedErrorResponse();
            }
            return $e->render($request);
        });
    }
}
