<?php

namespace App\Http\Controllers;

use App\Models\Ejemplar;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{   const paginacion = 10;
    public function index(Request $request){

        $search = $request->get('search');
        $libros = Ejemplar::where('titulo', 'like', '%' .$search. '%')->paginate($this::paginacion);
        $libros = Ejemplar::all();
        $categorias = Categoria::get();

        return view('pages.index.index', compact('categorias' , 'libros', 'search'));

    }

    public function show(Request $request, $idEjemplar){
        $libro = Ejemplar::find($idEjemplar);
        $libros = Ejemplar::all();
        $categorias = Categoria::get();
        $search = $request->get('search');
        return view('pages.ejemplar.ejemplar', compact('libros', 'search', 'categorias', 'libro'));
    }



    public function store(Request $request){
        $request->validate([
            'titulo' => ['required','min:5','max:200'],
            'ISBN' => ['required','integer'],
            'categoria' => ['required'],
            'idioma' => ['required'],
            'autor' => ['required'],
            'editorial' => ['required'],
            'formato' => ['required'],
            'estado' => ['required'],
            'sharelines' => ['required','integer'],
            'tags' => ['required'],
            'descripcion' => ['required'],
            'foto' => ['required','mimes:jpeg,jpg,png']
        ]);

        $libro = new Ejemplar();


        $libro->titulo = $request->input("titulo");
        $libro->ISBN = $request->input("ISBN");
        $libro->idCategoria =  $request->input('categoria');
        $libro->idioma = $request->input("idioma");
        $libro->autor = $request->input("autor");
        $libro->editorial = $request->input("editorial");
        $libro->formato = $request->input("formato");
        $libro->estado = $request->input("estado");
        $libro->sharelines = $request->input("sharelines");
        $libro->tags = $request->input("tags");
        $libro->descripcion = $request->input("descripcion");
        if($request->hasFile('foto')){
            $libro['foto'] = $request->file('foto')->store('uploads','public');
        }
        $libro->save();

        session()->flash('status', '¡Libro subido! Gracias');
        return redirect()->route('index');
    }

}
