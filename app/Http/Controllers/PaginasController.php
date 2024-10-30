<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\GaleriaFoto;
use App\Models\Noticia;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function home (){
        $news =  Noticia::all();
        $banner =  Banner::all();
        return view('paginas/home', compact('news','banner'));
        
    }

    public function pacoteOffice(){
        $fotos = GaleriaFoto::where('pagina_id', 1)->get();
        return view('paginas.pacote-office', compact('fotos'));
    }
}
