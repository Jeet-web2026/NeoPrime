<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WhatweofferController;
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
        Route::post('admin-dashboard/about-us-add', 'AboutUsAdd')->name('about-us-add');
        Route::post('admin-dashboard/our-services-add', 'OurServicesAdd')->name('our-services-add');
        Route::post('admin-dashboard/latest-videos-add', 'LatestVideosAdd')->name('latest-videos-add');
        Route::post('admin-dashboard/blogs-add', 'BlogsAdd')->name('blogs-add');
        Route::get('admin-dashboard/services', 'ServicesShow')->name('services');
        Route::post('admin-dashboard/add-services-description', 'ServicesDescription')->name('services-description');
    });
});

Route::controller(WhatweofferController::class)->group(function () {
    Route::get('what-we-offer/product={id}', 'OfferedFullDetails')->name('offer-full-details');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('about-us', 'AboutUs')->name('about-us-page');
    Route::get('who-we-are', 'Whoweare')->name('who-we-are-page');
    Route::get('vission-mission', 'VissionMission')->name('vission-mission-page');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('viewblogs/blog={id}', 'ViewBlog')->name('blog-full-view');
    Route::get('blogs', 'ViewBlogs')->name('blogs-full-view');
});

Route::controller(ServicesController::class)->group(function () {
    Route::get('service/{id}', 'ViewServices')->name('view-service');
});

Route::fallback(function () {
    return redirect()->route('home');
});
