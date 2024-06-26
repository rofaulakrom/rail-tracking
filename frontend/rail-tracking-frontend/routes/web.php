<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\TrainController;

Route::get('/', function () {
    return redirect('/home');
});



// Route untuk mendapatkan lokasi kereta
Route::get('/location', [APIController::class, 'getTrainLocation']);

// Route untuk mendapatkan rute kereta berdasarkan nomor KA
Route::get('/api/train/route/{trainNumber}', [TrainController::class, 'getRoute']);

// Route untuk menampilkan form home
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');

// Route untuk menyimpan data dari form home
Route::post('/home', [HomeController::class, 'store'])->middleware(['auth']);

// Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [DashboardController::class, 'store'])->middleware(['auth']);

// Route untuk menampilkan halaman tracking
Route::get('/tracking/{trainNumber}', [TrainController::class, 'showTracking'])->middleware(['auth'])->name('tracking');

// Route untuk menampilkan stasiun
Route::get('/stations', [StationController::class, 'index']);

// Route untuk API endpoint
Route::get('/api/train/route/{trainNumber}', [TrainController::class, 'getRoute']);
Route::get('/api/train/location', [TrainController::class, 'getLocation']);

require __DIR__.'/auth.php';
