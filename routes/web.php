<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('callback-request', [HomeController::class, 'callbackRequest'])->name('callback-request');

Route::controller(AuthenticationController::class)->group(function () {
    Route::redirect('login', 'home')->name('login');
    Route::get('admin-login', 'AdminLogin')->name('admin-login');
    Route::post('admin-verify', 'AdminVerify')->name('admin-verify');
    Route::post('admin-logout', 'AdminLogout')->name('admin-logout');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin-dashboard', 'Dashboard')->name('admin-dashboard');
        Route::get('admin-dashboard/landing-content', 'GetLandingcontent')->name('get-admin-landing-content');
        Route::post('admin-dashboard/landing-content-add', 'AddLandingContent')->name('landing-page-content-add');
        Route::get('admin-dashboard/callback-requests', 'Callbackrequests')->name('callback-requests');
        Route::post('admin-dashboard/we-offer-add', 'WeOfferAdd')->name('we-offer-add');
    });
});

Route::fallback(function () {
    return redirect()->route('home');
});
