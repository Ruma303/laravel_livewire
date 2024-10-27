<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("User Index")]
class Index extends Component
{
    public function delete(User $user)
    {
        $user->delete();
    }

    public function generate_users()
    {
        User::factory(10)->create();
    }

    public function render()
    {
        return view('livewire.users.index', [
            'users'=> User::all(),
        ]);
    }
}
