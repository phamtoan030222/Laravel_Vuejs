<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Backend routes

Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');


Route::get('admin', [AuthController::class, 'index'])->name('auth.admin');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
