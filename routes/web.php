<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/test', 'layouts.app');

Route::view('register', 'auth.register');
Route::view('login', 'auth.login');
Route::view('file-upload', 'file-upload');
