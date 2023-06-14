<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

//La ruta / corresponde al método index del controlador LibroController.
Route::get('/', [LibroController::class, 'index'])->name('index');

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios')->middleware('auth');

//La ruta /categorias/{categoria} corresponde al método show del controlador CategoriasController.
Route::get('/categorias/{categoria}',[CategoriasController::class, 'show'])->name('categorias.show');

//La ruta /categorias/{libro} corresponde al método show del controlador LibroController.
Route::get('/ejemplar/{libro}', [LibroController::class, 'show'])->name('ejemplar');

//La ruta /categorias (método POST) corresponde al método store del controlador LibroController.
Route::post('/categorias', [LibroController::class, 'store'])->name('categorias.store');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
Route::post('customRegister', [CustomAuthController::class, 'customRegister'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
