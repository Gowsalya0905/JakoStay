<?php


use App\Http\Controllers\Login\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::controller(AuthController::class)->group(function () {

    // Login
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login-submit', 'login')->name('login.submit');

    // Register
    Route::get('/register', 'showRegister')->name('register');
    Route::post('/register-submit', 'register')->name('register.submit');

    // Forgot Password
    Route::get('/forgot-password', 'showForgotPassword')->name('forgot.password');
    Route::post('/forgot-password-submit', 'forgotPasswordSubmit')->name('forgot.password.submit');

    // Reset Password
    Route::get('/reset-password/{token}', 'showResetPassword')->name('reset.password');
    Route::post('/reset-password-submit', 'resetPasswordSubmit')->name('reset.password.submit');

    // Logout
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/home', 'showhome')->name('home');
});;
