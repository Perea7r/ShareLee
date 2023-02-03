<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'index')->name('index');

Route::get('/categorias', [LibroController::class, 'index'])->name('categorias');
Route::get('/categorias/{libro}', [LibroController::class, 'show']);
