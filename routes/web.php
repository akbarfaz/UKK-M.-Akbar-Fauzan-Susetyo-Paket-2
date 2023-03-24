<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\DashboardController as AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Login
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login/store', [LoginController::class, 'store'])->name('login.store');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    // Register
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');

    // Pengaduan
    Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
    Route::get('pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');

    // Admin Dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
