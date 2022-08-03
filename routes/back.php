<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController')->name('dashboard');
Route::get('/login', [GoogleLoginController::class, 'getGoogleAuth']);
Route::get('/login/callback', [GoogleLoginController::class, 'authGoogleCallback']);
