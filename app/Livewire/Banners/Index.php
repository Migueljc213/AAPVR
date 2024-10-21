<?php

namespace App\Livewire\Banners;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public string $search = '';

    public function render()
    {
        $banners = Banner::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', "%{$this->search}%");
            })->paginate(10);

        return view('livewire.banners.index', compact('banners'));
    }
}
