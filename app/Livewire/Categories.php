<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categories = [];
    public $name;
    public $description;
    public $condition = 1; // Predeterminado como "Activo"

    protected $rules = [
        'name' => 'required|max:50',
        'description' => 'nullable|max:255',
        'condition' => 'required|boolean', // Validación para el campo condition
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function save()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->reset(['name', 'description']);
        $this->categories = Category::all();

        session()->flash('message', '¡Category created successfully!');
    }

    public function resetForm()
    {
        $this->reset(['name', 'description', 'condition']);
    }

    public function render()
    {
        return view('livewire.categories');
    }
}
