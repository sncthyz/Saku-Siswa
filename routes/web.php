<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ManageUangController;
use App\Mail\KontakEmail;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {

Route::get('/dashboard', [ManageUangController::class, 'index']);
Route::get('/dashboard', [ManageUangController::class, 'showData']);
Route::get('/history', [ManageUangController::class, 'history']);
Route::get('/history/{id}', [ManageUangController::class, 'edit'])->name('history.edit');
Route::post('/history/{id}', [ManageUangController::class, 'update'])->name('history.update');

Route::delete('/history/{id}', [ManageUangController::class, 'destroy'])->name('history.delete');
Route::post('/dashboard', [ManageUangController::class, 'store']);
Route::get('/logout', [AuthController::class, 'Logout']);
Route::get('/history', [ManageUangController::class, 'showAllData']);

});

Route::get('/',[AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'Login']);
Route::post('/register', [AuthController::class, 'Register']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');



Route::get('/forgot-password', [ForgotPasswordController::class, 'main'])
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'SendEmail'])
    ->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('pages.auth.resetpassword', ['token' => $token]);
})->name('password.reset');

Route::post('/reset-password', [ForgotPasswordController::class, 'ResetEmail'])
    ->name('password.update');


Route::post('/', [MailController::class, 'Mail']);
