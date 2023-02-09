<?php

namespace App\Http\Controllers;

use App\Models\Ejemplar;
use App\Models\Categoria;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        $libros = Ejemplar::get();
        $categorias = Categoria::all();

        return view('index', compact('categorias' , 'libros'));
        
    }

    public function show($libro){
        $libro = Ejemplar::find($libro);
        return view('libros.show', ['libro' => $libro]); 
    }

    public function store(Request $request){
        $libro = new Ejemplar();
        $libro->titulo = $request->input("titulo");
        $libro->ISBN = $request->input("ISBN");
        $libro->idioma = $request->input("idioma");
        $libro->autor = $request->input("autor");
        $libro->editorial = $request->input("editorial");
        $libro->formato = $request->input("formato");
        $libro->estado = $request->input("estado");
        $libro->sharelines = $request->input("sharelines");
        $libro->tags = $request->input("tags");
        $libro->descripcion = $request->input("descripcion");
        $libro->foto = $request->input("foto");
        $libro->save();
    }
}