<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Método que muestra el '/'
    public function index(){
        return view('cursos.index');
    }

    // Método que muestra componentes para crear algo
    public function create(){
        return view('cursos.create');
    }

    // Método que muestra un recurso específico
    public function show(string $curso){
        // Alternativa
        // compact('curso'); // ['curso' => $curso];

        return view('cursos.show', compact('curso'));
    }
}
