<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =======================
// FRONTEND
// =======================

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/menu', [FrontController::class, 'menu'])->name('menu');
Route::get('/reservasi', [FrontController::class, 'reservasi'])->name('reservasi');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/kontak', [FrontController::class, 'kontak'])->name('kontak');

Route::get('/page', [FrontController::class, 'page'])->name('page');
Route::get('/test', [FrontController::class, 'test'])->name('test');


// =======================
// ADMIN CRUD MENU
// =======================

Route::prefix('admin')->group(function () {

    Route::resource('menu', MenuController::class);

});