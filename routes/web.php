<?php

use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

//La ruta / corresponde al método index del controlador LibroController.
Route::get('/', [LibroController::class, 'index'])->name('home');

//Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios')->middleware('auth');

//La ruta /categorias/{categoria} corresponde al método show del controlador CategoriasController.
Route::get('/categorias/{categoria}',[CategoriasController::class, 'show'])->name('categorias.show');

//La ruta /categorias/{libro} corresponde al método show del controlador LibroController.
Route::get('/ejemplar/{libro}', [LibroController::class, 'show'])->name('ejemplar');

//La ruta /categorias (método POST) corresponde al método store del controlador LibroController.
Route::post('/categorias', [LibroController::class, 'store'])->name('categorias.store');

Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AutenticacionController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');
Route::get('/usuarios/{id}', [UsuariosController::class, 'show'])->name('usuarios.show');
Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::put('/usuarios/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

Route::post('/logout', [App\Http\Controllers\UsuariosController::class, 'logout'])->name('logout');
