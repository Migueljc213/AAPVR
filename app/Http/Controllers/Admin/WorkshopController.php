<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Workshop;
use DateTime;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin.workshops.index');
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
            'video' => 'required|string',
            'imagem1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          
        ], [
            'titulo.required' => 'O titulo é obrigatório!',
            'video.required' => 'O video é obrigatório!',
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

        $pesseio = new Workshop();
        $pesseio->titulo = $request->input('titulo');
        $pesseio->video = $request->input('video');
        $pesseio->imagem1 = $imagePath1;
        $pesseio->imagem2 = $imagePath2;
        $pesseio->imagem3 = $imagePath3;
        $pesseio->imagem4 = $imagePath4;
        $pesseio->save();
        return redirect()->route('workshops.index')->with('success', 'Workshop criado com sucesso!');
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
        $workshop = Workshop::findOrFail($id);
        if ($workshop) {
            return view('admin.workshops.editar', compact('workshop'));
        }
        return  redirect()->route('workshops.index')->with('fail', 'workshop não encontrado');
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
            'video' => 'required|string',
            'imagem1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagem4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          
        ], [
            'titulo.required' => 'O titulo é obrigatório!',
            'video.required' => 'O video é obrigatório!',
        ]);

        $workshop = Workshop::findOrFail($id);
        if (isset($workshop)) {
    
            if ($request->hasFile('imagem1')) {
                $novoNomeArquivo = 'imagem1' . $horaAtual . '.' . $request->file('imagem1')->extension();
                $imagePath1 = $request->file('imagem1')->storeAs('workshop' . $horaAtual, $novoNomeArquivo, 'public');
                $workshop->imagem1 = $imagePath1;
            }
            if ($request->hasFile('imagem2')) {
                $novoNomeArquivo = 'imagem2' . $horaAtual . '.' . $request->file('imagem2')->extension();
                $imagePath2 = $request->file('imagem2')->storeAs('workshop' . $horaAtual, $novoNomeArquivo, 'public');
                $workshop->imagem2 = $imagePath2;
            }
            if ($request->hasFile('imagem3')) {
                $novoNomeArquivo = 'imagem3' . $horaAtual . '.' . $request->file('imagem3')->extension();
                $imagePath3 = $request->file('imagem3')->storeAs('workshop' . $horaAtual, $novoNomeArquivo, 'public');
                $workshop->imagem3 = $imagePath3;
            }
            if ($request->hasFile('imagem4')) {
                $novoNomeArquivo = 'imagem4' . $horaAtual . '.' . $request->file('imagem4')->extension();
                $imagePath4 = $request->file('imagem4')->storeAs('workshop' . $horaAtual, $novoNomeArquivo, 'public');
                $workshop->imagem4 = $imagePath4;
            }

            $workshop->titulo = $request->input('titulo');
            $workshop->video = $request->input('video');
            $workshop->save();
            return redirect()->route('workshops.index')->with('success', 'Workshop criado com sucesso!');
        }
        return redirect()->route('workshops.index')->with('fail', 'Banner não encontrada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $workshop = Workshop::findOrFail($id);
        if($workshop){
            $workshop->delete();
            return redirect()->route('workshops.index')->with('sucesso', 'Workshop excluido com sucesso!');
        }
    }
}


