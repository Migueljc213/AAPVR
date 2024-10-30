<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Galeria extends Component
{
    public $fotos;

    public function __construct($fotos)
    {
        $this->fotos = $fotos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.galeria');
    }
}
