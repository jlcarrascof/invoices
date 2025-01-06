<?php

namespace App\Livewire;

use Livewire\Component;

class Categories extends Component
{
    public function render()
    {
        return view('livewire.categories')
            ->extends('components.layouts.app') // Extiende el layout manualmente
            ->section('content'); // Define la sección de contenido
    }
}
