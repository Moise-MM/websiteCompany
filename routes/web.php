<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('/dashboard/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/dashboard/login/connexion', [LoginController::class, 'login'])->name('login.connexion');



Route::get('',[HomeController::class, 'index'])->name('home.index');


