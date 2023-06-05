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

    public function show($id, Request $request){
        $categoria = Categoria::find($id);
        $libros = $categoria->libros;
        $search = $request->get('search');

        return view('categorias.show', compact('categoria', 'libros', 'search'));
    }

}
