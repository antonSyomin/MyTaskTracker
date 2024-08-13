<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('register', [RegistrationController::class, 'index'])->name('register');
Route::post('register', [RegistrationController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('login/{user}/confirmation', [LoginController::class, 'confirmation'])->name('login.confirmation');
Route::post('login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');

Route::redirect('/home', '/')->name('home.redirect');




