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
        return view('categorias', compact('categorias'));
    }

    public function show($id, Request $request){
        $categoria = Categoria::find($id);
        $categorias = Categoria::get();
        $libros = $categoria->libros;
        $search = $request->get('search');

        return view('pages.categorias.categorias', compact('categoria', 'libros', 'search', 'categorias'));
    }
}
