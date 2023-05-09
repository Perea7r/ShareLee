<?php

namespace App\Http\Controllers;


use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index', ['categorias' => $categorias]);
    }

    public function show($id){
        $categoria = Categoria::find($id);
        $libros = $categoria->libros;

        return view('categorias.show', ['categoria' => $categoria, 'libros' => $libros]);
    }

}
