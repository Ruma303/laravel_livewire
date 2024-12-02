<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class AdminLayout extends Component
{
    public function render()
    {
        return view('components.layouts.admin')
            ->layoutData([
                'admin' => 'Il boss',
                'title' => 'Admin Dashboard',
            ]);
    }
}
