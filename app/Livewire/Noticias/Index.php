<?php

namespace App\Livewire\Noticias;

use App\Models\Noticia;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    public string $search = '';

    public function render()
    {
        $noticias = Noticia::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', "%{$this->search}%");
            })->paginate(10);

        return view('livewire.noticias.index', compact('noticias'));
    }
}
