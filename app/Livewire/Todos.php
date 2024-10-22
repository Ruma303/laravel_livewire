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

    public $todo = "";

    public function add()
    {
        $this->todos[] = $this->todo;
        //$this->todo = '';
        $this->reset('todo');
    }



    public function render()
    {
        return view('livewire.todos');
    }
}
