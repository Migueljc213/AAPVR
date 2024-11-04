<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Passeio;
use DateTime;
use Illuminate\Http\Request;

class PasseiosController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin.passeios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new DateTime();
        $horaAtual = $data->format('Y-m-d_H-i-s');

        $request->validate([
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'required|string',
            'imagem1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          
        ], [
            'titulo.required' => 'O titulo é obrigatório!',
            'subtitulo.required' => 'O subtitulo é obrigatório!',
        ]);


        if ($request->hasFile('imagem1')) {
            $novoNomeArquivo = 'imagem1' . $horaAtual . '.' . $request->file('imagem1')->extension();
            $imagePath1 = $request->file('imagem1')->storeAs('pesseio' . $horaAtual, $novoNomeArquivo, 'public');
        }
        if ($request->hasFile('imagem2')) {
            $novoNomeArquivo = 'imagem2' . $horaAtual . '.' . $request->file('imagem2')->extension();
            $imagePath2 = $request->file('imagem2')->storeAs('pesseio' . $horaAtual, $novoNomeArquivo, 'public');
        }
        if ($request->hasFile('imagem3')) {
            $novoNomeArquivo = 'imagem3' . $horaAtual . '.' . $request->file('imagem3')->extension();
            $imagePath3 = $request->file('imagem3')->storeAs('pesseio' . $horaAtual, $novoNomeArquivo, 'public');
        }
        if ($request->hasFile('imagem4')) {
            $novoNomeArquivo = 'imagem4' . $horaAtual . '.' . $request->file('imagem4')->extension();
            $imagePath4 = $request->file('imagem4')->storeAs('pesseio' . $horaAtual, $novoNomeArquivo, 'public');
        }

        $pesseio = new Passeio();
        $pesseio->titulo = $request->input('titulo');
        $pesseio->subtitulo = $request->input('subtitulo');
        $pesseio->imagem1 = $imagePath1;
        $pesseio->imagem2 = $imagePath2;
        $pesseio->imagem3 = $imagePath3;
        $pesseio->imagem4 = $imagePath4;
        $pesseio->save();
        return redirect()->route('passeios.index')->with('success', 'Passeio criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $passeio = Passeio::findOrFail($id);
        if ($passeio) {
            return view('admin.passeios.editar', compact('passeio'));
        }
        return  redirect()->route('passeios.index')->with('fail', 'passeio não encontrado');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = new DateTime();
        $horaAtual = $data->format('Y-m-d_H-i-s');

        $request->validate([
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'required|string',
            'imagem1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          
        ], [
            'titulo.required' => 'O titulo é obrigatório!',
            'subtitulo.required' => 'O subtitulo é obrigatório!',
        ]);

        $passeio = Passeio::findOrFail($id);
        if (isset($passeio)) {
    
            if ($request->hasFile('imagem1')) {
                $novoNomeArquivo = 'imagem1' . $horaAtual . '.' . $request->file('imagem1')->extension();
                $imagePath1 = $request->file('imagem1')->storeAs('passeio' . $horaAtual, $novoNomeArquivo, 'public');
                $passeio->imagem1 = $imagePath1;
            }
            if ($request->hasFile('imagem2')) {
                $novoNomeArquivo = 'imagem2' . $horaAtual . '.' . $request->file('imagem2')->extension();
                $imagePath2 = $request->file('imagem2')->storeAs('passeio' . $horaAtual, $novoNomeArquivo, 'public');
                $passeio->imagem2 = $imagePath2;
            }
            if ($request->hasFile('imagem3')) {
                $novoNomeArquivo = 'imagem3' . $horaAtual . '.' . $request->file('imagem3')->extension();
                $imagePath3 = $request->file('imagem3')->storeAs('passeio' . $horaAtual, $novoNomeArquivo, 'public');
                $passeio->imagem3 = $imagePath3;
            }
            if ($request->hasFile('imagem4')) {
                $novoNomeArquivo = 'imagem4' . $horaAtual . '.' . $request->file('imagem4')->extension();
                $imagePath4 = $request->file('imagem4')->storeAs('passeio' . $horaAtual, $novoNomeArquivo, 'public');
                $passeio->imagem4 = $imagePath4;
            }

            $passeio->titulo = $request->input('titulo');
            $passeio->subtitulo = $request->input('subtitulo');
            $passeio->save();
            return redirect()->route('passeios.index')->with('success', 'Passeio criado com sucesso!');
        }
        return redirect()->route('passeios.index')->with('fail', 'Banner não encontrada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $passeio = Passeio::findOrFail($id);
        if($passeio){
            $passeio->delete();
            return redirect()->route('passeios.index')->with('sucesso', 'Passeio excluido com sucesso!');
        }
    }
}

