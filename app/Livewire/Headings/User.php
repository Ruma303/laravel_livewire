<?php

namespace App\Livewire\Headings;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return view('livewire.headings.user')->with([
            'user'=> 'My User',
            'role'=> 'guest'
        ]);
    }
}
