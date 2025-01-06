<?php

namespace App\Livewire;

use Livewire\Component;

class Categories extends Component
{

    /*
    public function render()
    {
        return view('livewire.categories', [
            'title' => 'Gestión de Categorías',
        ]);
    }
    */

    public function render()
    {
        return view('livewire.categories') // Define la vista específica
            ->layout('components.layouts.app', ['title' => 'Gestión de Categorías']); // Usa el layout
    }
}
