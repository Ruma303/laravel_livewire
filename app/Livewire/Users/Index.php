<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("User Index")]
class Index extends Component
{
    public function render()
    {
        return view('livewire.users.index', [
            'users'=> User::all(),
        ]);
    }
}
