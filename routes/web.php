<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\EndUserController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', EndUserController::class)->name('enduser.home');
Route::get('/services', App\Http\Controllers\EndUser\ServiceController::class)->name('enduser.services');

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //Services
        Route::resource('services', ServiceController::class);

        Route::get('users', function () {
            return "users";
        })->name('users');
    });
});









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
