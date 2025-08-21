<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'doAuthentication'])->name('doAuthentication');
Route::get('/regsiter', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('doRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/user-profile', [ProfileController::class, 'index'])->name('user-profile');
    Route::get('/prompt-ai', function() {
        return view('home.page.ai.index')->with('user', Auth::user());
    })->name('prompt-ai');
});

// Route::get('/app', function () {
//     return view('layouts.app');
// })->name('dashboard');
