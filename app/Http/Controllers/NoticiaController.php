<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use DateTime;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function getNoticias()
    {
        $noticias = Noticia::all();
        return view('admin.noticias.noticias', compact('noticias'));
    }
    public function setNoticias(Request $request)
    {

        $data = new DateTime();
        $horaAtual = $data->format('Y-m-d H:i:s');

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required',
        ], [
            'name.required' => 'O nome é obrigatório!',
            'description.required' => 'A descrição é obrigatório!',
            'img.required' => 'A imagem é obrigatório!',
            'link.required' => 'O link é obrigatório!',
        ]);

      
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('noticia/' + $horaAtual + '/', 'public');
        }
        $noticias = new Noticia();
        $noticias->name = $request->input('name');
        $noticias->description = $request->input('description');
        $noticias->img = $imagePath;
        $noticias->link = $request->input('link');
        $noticias->save();
        return redirect()->route('noticias.index')->with('success', 'Notícia criada com sucesso!');
    }

    public function editNoticias(Request $request, string $id)
    {
        $noticia = Noticia::findOrFail($id);
        if ($noticia) {
            return view('admin.noticias.editar-noticia', compact('noticia'));
        }
        return  redirect()->route('noticias.index')->with('fail', 'Notícia não encontrada');
    }

    public function updateNoticias(Request $request, string $id)
    {
        $data = new DateTime();
        $horaAtual = $data->format('Y-m-d_H-i-s');

        $noticia = Noticia::findOrFail($id);
        if (isset($noticia)) {
            $noticia->name = $request->input('name');
            $noticia->description = $request->input('description');
            if ($request->hasFile('img')) {
                $imagePath = $request->file('img')->store('noticia/' . $horaAtual . '/', 'public');
                $noticia->img = $imagePath;
            }
            $noticia->link = $request->input('link');
            $noticia->save();
            return redirect()->route('noticias.index')->with('success', 'Notícia atualizada com sucesso!');
        }
        return redirect()->route('noticias.index')->with('fail', 'Notícia não encontrada');
    }


    public function destroyNoticias(string $id){
        $noticia = Noticia::findOrFail($id);
        if($noticia){
            $noticia->delete();
            return redirect()->route('noticias.index')->with('sucesso', 'Notícia excluida com sucesso!');
        }
    }
}
