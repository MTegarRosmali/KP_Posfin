<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/berita', [HomeController::class, 'berita']);
Route::get('/produk', [HomeController::class, 'produk']);
Route::get('/direksi', [HomeController::class, 'direksi']);
Route::get('/core', [HomeController::class, 'core']);

// auth 
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);

// Admin
Route::prefix('/admin')->middleware('role:admin')->group(function () {
  // Dashboard
  Route::get('/dashboard', [DashboardController::class, 'index']);
  // CRUD
  Route::resource('sliders', SliderController::class);
  Route::resource('services', ServiceController::class);
  Route::resource('beritas', BeritaController::class);
  Route::resource('clients', ClientController::class);
  // Kontak
  Route::get('contact', [ContactController::class, 'index']);
  Route::put('contact/{id}', [ContactController::class, 'update']);
  // About
  Route::get('about', [AboutController::class, 'index']);
  Route::put('about/{id}', [AboutController::class, 'update']);
});
