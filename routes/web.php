<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::middleware(['auth'/*, 'verified'*/])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
