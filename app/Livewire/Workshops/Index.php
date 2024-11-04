<?php

namespace App\Livewire\Workshops;

use App\Models\Workshop;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public string $search = '';
    
    public function render()
    {
        $workshops = Workshop::query()
        ->when($this->search, function ($query) {
            $query->where('titulo', 'like', "%{$this->search}%");
        })->paginate(10);
        return view('livewire.workshops.index', compact('workshops'));
    }
}
