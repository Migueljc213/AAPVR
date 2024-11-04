<?php

namespace App\Livewire\Passeios;

use App\Models\Passeio;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public string $search = '';
    
    public function render()
    {
        $passeios = Passeio::query()
        ->when($this->search, function ($query) {
            $query->where('titulo', 'like', "%{$this->search}%");
        })->paginate(10);
        return view('livewire.passeios.index', compact('passeios'));
    }
}
