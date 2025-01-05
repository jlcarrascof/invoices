<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categories = [];
    public $name;
    public $description;

    protected $rules = [
        'name' => 'required|max:50',
        'description' => 'nullable|max:255',
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.categories');
    }
}
