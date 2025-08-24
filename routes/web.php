<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserManagementController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('admin/login', [AuthController::class, 'index'])->name('login');
Route::post('admin/login', [AuthController::class, 'doAuthentication'])->name('doAuthentication');
Route::get('admin/regsiter', [RegisterController::class, 'index'])->name('register');
Route::post('admin/register', [RegisterController::class, 'register'])->name('doRegister');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function() {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/user-profile', [ProfileController::class, 'index'])->name('user-profile');
    Route::get('/prompt-ai', function() {
        return view('home.page.ai.index')->with('user', Auth::user());
    })->name('prompt-ai');

    Route::get('user-management', [UserManagementController::class, 'index'])->name('user-management');
    Route::post('user-management/approve/{id}', [UserManagementController::class, 'userApprove'])->name('user-approve');
});

// Route::get('/app', function () {
//     return view('layouts.app');
// })->name('dashboard');
