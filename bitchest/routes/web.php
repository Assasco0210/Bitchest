<?php

use Illuminate\Support\Facades\Route;

Route::get('/pre-index', function () {
    return view('pre_index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/profile', function () {
    return view('profile');
});
