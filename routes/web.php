<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PageController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;

// Rute Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Rute Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Password Reset
Route::get('/password/reset', [AuthController::class, 'showResetForm'])->name('password.request');
Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [AuthController::class, 'showResetFormWithToken'])->name('password.reset');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.update');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/lumpia', function () {
    return view('lumpia');
});

Route::post('/send-email', [ChatController::class, 'sendEmail']);

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



