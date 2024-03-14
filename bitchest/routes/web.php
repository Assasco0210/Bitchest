<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController; // Assurez-vous d'avoir ce contrôleur
use App\Http\Controllers\ProfileController; // Ajoutez cette ligne

Route::get('/inscription', [IndexController::class, 'showRegistrationForm']);
Route::post('/inscription', [IndexController::class, 'handleRegistration']);
Route::match(['get', 'post'], '/connexion', [AuthController::class, 'handleLogin']);

// Ajoutez ces lignes pour la réinitialisation du mot de passe
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);

Route::get('/profile', [ProfileController::class, 'showProfile']);