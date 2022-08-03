<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Route::get('/', 'DashboardController')->name('dashboard');
});
