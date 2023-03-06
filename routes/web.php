<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LibroController::class, 'index'])->name('index');

Route::get('/categorias/{categoria}',[CategoriasController::class, 'index'])->name('categorias');

Route::get('/categorias/{libro}', [LibroController::class, 'show'])->name('libros.show');

Route::post('/categorias', [LibroController::class, 'store'])->name('categorias.store');

