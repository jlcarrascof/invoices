<?php

namespace App\Livewire;

use Livewire\Component;

class Categories extends Component
{
    public $categories = [];
    public $name;
    public $description;

    public function render()
    {
        return view('livewire.categories');
    }
}
