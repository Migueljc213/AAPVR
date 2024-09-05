<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function home (){
        $news =  Noticia::all();
        return view('paginas/home', compact('news'));
        
    }
}
