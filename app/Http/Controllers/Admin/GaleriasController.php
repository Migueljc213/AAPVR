<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriaFoto;
use App\View\Components\Galeria;
use Illuminate\Http\Request;

class GaleriasController extends Controller
{

    public function index()
    {
        return view('admin.galerias.index');
    }

    public function novo(Request $request)
    {
        $request->validate([
            'url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Armazenar a imagem
        if ($request->hasFile('url')) {
            // Gera um nome único para o arquivo
            $extensao = $request->file('url')->getClientOriginalExtension();
            $nomeArquivo = 'imagem_' . now()->format('Ymd_His') . '.' . $extensao; 
            
            // Armazena a imagem no diretório 'public/imagens'
            $request->file('url')->storeAs('imagens', $nomeArquivo, 'public'); 
    
            // Salva no banco de dados
            GaleriaFoto::create([
                'url' => 'storage/imagens/' . $nomeArquivo, // Caminho para o arquivo
                'pagina_id' => $request->input('pagina_id')
            ]);
        }
        return back()->with('success', 'Imagem salva com sucesso!');

    }

    public function show(string $id)
    {
        $fotos =  GaleriaFoto::where('pagina_id', $id)->get();
        if ($fotos) {
            return view('admin.galerias.galeria', compact('fotos', 'id'));
        }
    }
    public function delete(string $id)
    {
        $foto =  GaleriaFoto::findOrfail($id);
        if ($foto) {
            $foto->delete();
            return view('admin.galerias.galeria')->with('sucess', 'Imagem excluida com sucesso');
        }
    }
}
