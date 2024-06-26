<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;


Route::get('/', function () {
    return redirect('/home');
});

Route::get('/location', [ApiController::class, 'getTrainLocation']);

Route::get('/api/train/route/{no_ka}', [RouteController::class, 'getRoute']);


Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');
Route::post('/home', [HomeController::class, 'store'])->middleware(['auth']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [DashboardController::class, 'store'])->middleware(['auth']);
Route::get('/tracking', [TrackingController::class, 'index'])->middleware(['auth'])->name('tracking');

require __DIR__.'/auth.php';

