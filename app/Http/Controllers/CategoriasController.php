<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller{
    public function index(){
        $categorias = Categoria::get();

        return view('categorias', ['categorias' => $categorias]);
        
    }

    public function create(){
        $categorias = Categoria::all();
        return view('categorias.create', compact('categorias'));
    }
}
