<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'index')->name('index');

Route::get('/categorias',[CategoriasController::class, 'index'])->name('categorias');
Route::get('/categorias/{libro}', [LibroController::class, 'show'])->name('categorias.show');
Route::post('/categorias', [LibroController::class, 'store'])->name('categorias.store');

