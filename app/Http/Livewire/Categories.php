<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Categories extends Component
{
    public function render()
    {
        return view('livewire.categories')
            ->layout('components.layouts.app', ['title' => 'Gestión de Categorías']);
    }
}
