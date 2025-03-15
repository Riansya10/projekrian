<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController; // Tambahkan import controller

// Rute untuk /welcome
Route::get('/welcome', function () {
    return view('welcome');
});

// Rute untuk /user/{id}
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

// Rute dengan prefix 'admin'
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

// Menggunakan Controller untuk listbarang
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/items', [ItemController::class, 'index']);

