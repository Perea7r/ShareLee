<?php

namespace App\Http\Controllers;

use App\Models\Ejemplar;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        $libros = Ejemplar::get();

        return view('categorias', ['libros' => $libros]);
        
    }

    public function show($libro){
        $libro = Ejemplar::find($libro);
        return view('libros.show', ['libro' => $libro]); 
    }
}