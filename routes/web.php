<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EndUserController;


Route::get('/', EndUserController::class)->name('enduser.home');
Route::get('/services', App\Http\Controllers\EndUser\ServiceController::class)->name('enduser.services');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// require __DIR__ . '/admin.php';