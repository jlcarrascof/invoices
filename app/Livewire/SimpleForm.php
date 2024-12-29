<?php

namespace App\Livewire;

use Livewire\Component;

class SimpleForm extends Component
{

    public $name;

    protected $rules = [
        'name' => 'required│max:50',
    ];


    public function render()
    {
        return view('livewire.simple-form');
    }
}
