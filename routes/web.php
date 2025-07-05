<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WhatweofferController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('callback-request', [HomeController::class, 'callbackRequest'])->name('callback-request');

Route::controller(AuthenticationController::class)->group(function () {
    Route::redirect('login', 'home')->name('login');
    Route::get('admin-login', 'AdminLogin')->name('admin-login');
    Route::get('client-register', 'ClientsLogin')->name('client-login');
    Route::get('client-login', 'Clientloginview')->name('client-login-view');
    Route::post('client-login', 'ClientVerifylogin')->name('client-verify-login');
    Route::post('admin-verify', 'AdminVerify')->name('admin-verify');
    Route::post('client-verify', 'ClientVerify')->name('client-verify');
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
        Route::post('admin-dashboard/add-career-vacancy', 'AddcareerVaccancy')->name('add-career-vacancy');
        Route::post('admin-dashboard/add-employee-details', 'AddEmployeeDetails')->name('add-employee-details');
    });
});

Route::middleware(['auth:client'])->group(function () {
    Route::controller(ClientController::class)->group(function () {
        Route::prefix('client-dashboard')->group(function () {
            Route::get('/', 'index')->name('client-dashboard');
            Route::get('product-view/{id}', 'productView')->name('client-product-view');
            Route::post('place-order/{id}', 'productOrder')->name('client-product-order');
        });
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
    Route::get('all-services', 'AllServices')->name('all-services');
    Route::get('service/{id}', 'ViewServices')->name('view-service');
});

Route::controller(CareerController::class)->group(function () {
    Route::get('career', 'careerVacancy')->name('career-view');
    Route::get('career/job-details/{id}', 'JobView')->name('job-view');
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('all-experts', 'index')->name('all-experts-view');
    Route::get('our-experts/{id}', 'PerExpert')->name('per-expert');
});

Route::fallback(function () {
    return redirect()->route('home');
});
