<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController; // Assurez-vous d'avoir ce contrôleur

Route::get('/inscription', [IndexController::class, 'showRegistrationForm']);
Route::post('/inscription', [IndexController::class, 'handleRegistration']);
Route::get('/connexion', [IndexController::class, 'showLoginForm']);

// Ajoutez ces lignes pour la réinitialisation du mot de passe
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);

Route::get('/profile', 'ProfileController@showProfile');
