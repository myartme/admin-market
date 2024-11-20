<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::group([
        'prefix' => 'register',
        'as' => 'register.',
        'controller' => RegisterController::class
    ], function () {
        Route::get('/', 'create')
            ->name('create');

        Route::post('/', 'store')
            ->name('store');
    });

    Route::group([
        'prefix' => 'login',
        'as' => 'login.',
        'controller' => LoginController::class
    ], function () {
        Route::get('/', 'create')
            ->name('create');

        Route::post('/', 'store')
            ->name('store');
    });

    Route::group([
        'prefix' => 'password',
        'as' => 'password.',
        'controller' => PasswordController::class
    ], function () {
        Route::get('reset', 'resetView')
            ->name('reset.view');

        Route::post('reset', 'resetStore')
            ->name('reset.store');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});


