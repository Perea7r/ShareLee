<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizajeController extends Controller
{
    public function aprendizaje()
    {
        return view('pages.aprendizaje.aprendizaje');
    }
}
