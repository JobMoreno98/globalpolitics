<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\GaleriasController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\InvestigadoresController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\RequisitosController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);


    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

//ruta para poder ver la información de investigadores
Route::get('investigadores', [InvestigadoresController::class, 'index'])->middleware(['auth'])->name('investigadores');
Route::get('noticias', [NoticiasController::class, 'index'])->middleware(['auth'])->name('noticias');
Route::get('eventos', [EventosController::class, 'index'])->middleware(['auth'])->name('eventos');
Route::get('usuarios', [UsuariosController::class, 'index'])->middleware(['auth'])->name('usuarios');
Route::get('requisitos1', [RequisitosController::class, 'index'])->middleware(['auth'])->name('requisitos1');
Route::get('estudiantes1', [EstudiantesController::class, 'index'])->middleware(['auth'])->name('estudiantes1');
Route::get('galerias', [GaleriasController::class, 'index'])->middleware(['auth'])->name('galerias');
