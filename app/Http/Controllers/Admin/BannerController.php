<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use DateTime;
use Illuminate\Http\Request;


class BannerController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin.banners.index');
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required',
        ], [
            'title.required' => 'O nome é obrigatório!',
            'description.required' => 'A descrição é obrigatório!',
            'img.required' => 'A imagem é obrigatório!',
            'link.required' => 'O link é obrigatório!',
        ]);

      
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('banner' . $horaAtual, 'public');
        }
        $banners = new Banner();
        $banners->title = $request->input('title');
        $banners->description = $request->input('description');
        $banners->img = $imagePath;
        $banners->link = $request->input('link');
        $banners->save();
        return redirect()->route('banners.index')->with('success', 'Banner criado com sucesso!');
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
        $banner = Banner::findOrFail($id);
        if ($banner) {
            return view('admin.banners.editar-banner', compact('banner'));
        }
        return  redirect()->route('banners.index')->with('fail', 'Banner não encontrado');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = new DateTime();
        $horaAtual = $data->format('Y-m-d_H-i-s');

        $banner = Banner::findOrFail($id);
        if (isset($banner)) {
            $banner->title = $request->input('title');
            $banner->description = $request->input('description');
            if ($request->hasFile('img')) {
                $imagePath = $request->file('img')->store('banner' . $horaAtual, 'public');
                $banner->img = $imagePath;
            }
            $banner->link = $request->input('link');
            $banner->save();
            return redirect()->route('banners.index')->with('success', 'Banner atualizado com sucesso!');
        }
        return redirect()->route('banners.index')->with('fail', 'Banner não encontrada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::findOrFail($id);
        if($banner){
            $banner->delete();
            return redirect()->route('banners.index')->with('sucesso', 'Banner excluido com sucesso!');
        }
    }
}
