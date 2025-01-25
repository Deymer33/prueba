<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\ScrapingController;

Route::middleware(['auth'])->group(function () {
    Route::get('/scrapings', [ScrapingController::class, 'index'])->name('scrapings.index');
    Route::patch('/scrapings/{id}/approve', [ScrapingController::class, 'approve'])->name('scrapings.approve');
    Route::patch('/scrapings/{id}/refuse', [ScrapingController::class, 'refuse'])->name('scrapings.refuse');
});

use App\Http\Controllers\Admin\AuthController;

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/scrapings', [ScrapingController::class, 'index'])->name('scrapings.index');
});
