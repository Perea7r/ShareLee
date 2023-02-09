<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ejemplar;
use Illuminate\Http\Request;

class CategoriasController extends Controller{
    public function index(){
        $categorias = Categoria::all();

        return view('categorias', compact('categorias'));
        
    }
}
