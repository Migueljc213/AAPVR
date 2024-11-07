<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Comentario;
use App\Models\GaleriaFoto;
use App\Models\Noticia;
use App\Models\Passeio;
use App\Models\Workshop;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function home()
    {
        $news =  Noticia::all();
        $banner =  Banner::all();
        return view('paginas/home', compact('news', 'banner'));
    }

    public function noticiaShow(string $id)
    {
        $noticia = Noticia::findOrFail($id);
        if ($noticia) {
            $noticias = Noticia::orderBy('id', 'desc')->get();
            $comentarios  = Comentario::where('noticia_id', $id)->orderBy('id', 'desc')->paginate(5);
            return view('paginas.noticia', compact('noticia', 'noticias', 'comentarios'));
        }
    }

    public function noticiasIndex()
    {
        $noticias = Noticia::orderBy('id', 'desc')->paginate(6);
        return view('paginas.noticias', compact('noticias'));
    }

    public function pacoteOffice()
    {
        $fotos = GaleriaFoto::where('pagina_id', 1)->get();
        return view('paginas.pacote-office', compact('fotos'));
    }

    public function educacaoFinanceira()
    {
        $fotos = GaleriaFoto::where('pagina_id', 3)->get();
        $workshops = Workshop::orderBy('id', 'desc')->get();
        return view('paginas.educacao-financeira', compact('fotos', 'workshops'));
    }
    public function ilpiSorrindo()
    {
        $fotos = GaleriaFoto::where('pagina_id', 4)->get();
        $passeios = Passeio::orderBy('id', 'desc')->get();
        return view('paginas.ilpi-sorrindo', compact('fotos', 'passeios'));
    }
}
