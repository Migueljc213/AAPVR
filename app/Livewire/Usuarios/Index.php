<?php

namespace App\Livewire\Usuarios;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Url] 
    public string $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $usuarios = User::query()
            ->where('role', 'user')
            ->when($this->search, function ($query) {
                if ($this->search != null) {
                    $query
                        ->where('name', 'like', "%{$this->search}%")
                        ->orWhere('email', 'like', "%{$this->search}%");
                }else{
                    $this->updatingSearch();
                }
                
            })
            ->orderBy('name', 'desc')
            ->paginate(20);


        return view('livewire.usuarios.index', compact('usuarios'));
    }
}
