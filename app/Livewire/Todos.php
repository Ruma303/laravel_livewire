<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
//use App\Models\Todo;
use Livewire\Attributes\Title;

#[Title("Todos")]
class Todos extends Component
{
    public $todos = [];
    public $todo = "";
    public $status = "";
    public $preview = "";

    public function updated($props, $value)
    {
        $this->preview = ""; # Alternativa
        $this->reset("preview"); # Alternativa

        $this->validate();

        if ($props == "todo")
            $this->$props = strtoupper($value);
    }

    public function rules()
    {
        return [
            'todo' => 'required|min:5',
            'status' => 'required|string'
        ];
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
