<?php

namespace App\Livewire;

use Livewire\Component;
//use App\Models\Todo;
use Livewire\Attributes\Title;

#[Title("Todos")]
class Todos extends Component
{
    public $todos = [];
    public $todo = "";

    public function mount()
    {
    }

    public function updated($props, $value)
    {
        if ($props == "todo")
            $this->$props = strtoupper($value);
    }

    public function updatedTodo($value)
    {
            $this->todo = strtoupper($value);
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
