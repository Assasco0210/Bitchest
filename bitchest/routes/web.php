<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserTableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\NewsController;

Route::get('/inscription', [IndexController::class, 'showRegistrationForm']);
Route::post('/inscription', [IndexController::class, 'handleRegistration']);
Route::match(['get', 'post'], '/connexion', [AuthController::class, 'handleLogin']);

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);

Route::get('/profile', [ProfileController::class, 'showProfile']);
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// Ajoutez cette ligne pour le tableau des utilisateurs
Route::get('/admin/users', [UserTableController::class, 'showUserTable']);

//l'admin crée un nouvel utilisateur
Route::get('/admin/users/create', [UserController::class, 'create']);


Route::get('/admin/cryptos', [CryptoController::class, 'showCryptos']);

Route::get('/add-crypto', function () {
    return view('cryptos');
});

Route::get('/admin/news/create', function () {
    return view('news.create');
});
Route::get('/admin/news', [NewsController::class, 'index']);


