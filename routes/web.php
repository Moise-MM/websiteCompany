<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/admin/login', [LoginController::class, 'loginForm'])->name('login');


Route::get('',[HomeController::class, 'index'])->name('home.index');


