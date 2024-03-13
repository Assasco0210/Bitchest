<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/profile', function () {
    return view('profile');
});
