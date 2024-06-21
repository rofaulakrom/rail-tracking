<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrackingController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [DashboardController::class, 'store'])->middleware(['auth']);
Route::get('/tracking', [TrackingController::class, 'index'])->middleware(['auth'])->name('tracking');

require __DIR__.'/auth.php';

