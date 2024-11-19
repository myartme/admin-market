<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
