<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\AuthMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Registration Routes
Route::middleware([GuestMiddleware::class])->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});



// Login Routes
Route::middleware([GuestMiddleware::class])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});





// Dashboard Routes
Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'showUserRole'])->name('users');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});
