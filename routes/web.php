<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/dashboard', function () {
    return view('home.dashboard');
})->name('dashboard');
