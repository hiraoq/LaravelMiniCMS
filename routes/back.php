<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Route::get('/', 'DashboardController')->name('dashboard');
});
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
