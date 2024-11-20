<?php

use App\Http\Controllers\Auth\Api\LoginController;
use App\Http\Controllers\Auth\Api\RegisterController;
use App\Http\Controllers\PersonalAccessTokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
    });
});

Route::group([], function () {
    Route::middleware('guest')->group(function () {
        Route::post('register', [RegisterController::class, 'store']);
        Route::post('login', [LoginController::class, 'store']);
    });
    Route::post('logout', [LoginController::class, 'destroy'])
        ->middleware('auth:sanctum');

    Route::group([
        'prefix' => 'tokens',
        'controller' => PersonalAccessTokenController::class
    ], function () {
        Route::post('create', 'store');
        Route::middleware(['api', 'auth:sanctum'])->prefix('delete')->group(function () {
            Route::delete('/', 'destroy');
            Route::delete('device', 'destroyByDevice');
            Route::delete('all', 'destroyAll');
        });
    });
});
