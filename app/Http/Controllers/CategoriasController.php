<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ejemplar;
use Illuminate\Http\Request;

class CategoriasController extends Controller{
    public function index(){
        $libros = Ejemplar::all();
        $categorias = Categoria::get();

        return view('categorias.index', compact('categorias' , 'libros'));
    }

    public function show(Categoria $categoria){
        return view('categorias.show', ['categoria' => $categoria]);
    }
}
