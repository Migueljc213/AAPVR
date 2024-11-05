<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentariosRequest;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function store(ComentariosRequest $request)
    {
        Comentario::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'url' => $request->input('url'),
            'conteudo' => $request->input('conteudo'),
            'noticia_id' => $request->input('noticia_id'),
        ]);

        // Exemplo: Redirecionar ou retornar uma resposta após salvar
        return redirect()->route('noticia.show' , ['id' => $request->noticia_id])->with('success', 'Comentário criado com sucesso!');
    }

    public function getComentarios(string $id){
        $comentarios = Comentario::where('noticia_id', $id)->orderBy('id','desc')->get();
        return view('livewire.comentarios.index', compact('comentarios'));

    }
    public function destroyComentarios(string $id){
        $comentario = Comentario::findOrFail($id);
        if($comentario){
            $comentario->delete();
            return redirect()->back()->with('sucess', 'Comentário excluido com sucesso!');
        }
        return redirect()->back()->with('fail', 'Não foi possivel encontrar o comentário');
        
    }
}
