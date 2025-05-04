<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('admin-login', 'AdminLogin')->name('admin-login');
});



Route::fallback(function () {
    return redirect()->route('home');
});
