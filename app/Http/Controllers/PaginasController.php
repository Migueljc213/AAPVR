<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Noticia;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function home (){
        $news =  Noticia::all();
        $banner =  Banner::all();
        return view('paginas/home', compact('news','banner'));
        
    }
}
