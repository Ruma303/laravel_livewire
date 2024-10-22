<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todos = [
        'Learn Laravel',
        'Discover Livewire',
        'Use Alpine.js'
    ];



    public function render()
    {
        return view('livewire.todos');
    }
}
