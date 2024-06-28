<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;





Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/dashboard/login/connexion', [LoginController::class, 'login'])->name('login.connexion');





Route::get('',[HomeController::class, 'index'])->name('home.index');


