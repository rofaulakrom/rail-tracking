<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrackingController;

Route::get('/', function () {
    return redirect('/home');
});


Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');
Route::post('/home', [HomeController::class, 'store'])->middleware(['auth']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [DashboardController::class, 'store'])->middleware(['auth']);
Route::get('/tracking', [TrackingController::class, 'index'])->middleware(['auth'])->name('tracking');

require __DIR__.'/auth.php';

