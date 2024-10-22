<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increments(){$this->count++;}

    public function decrements($by){$this->count -= $by;}

    public function render()
    {
        return view('livewire.counter');
    }
}
