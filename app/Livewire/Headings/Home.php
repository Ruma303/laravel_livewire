<?php

namespace App\Livewire\Headings;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return <<<'HTML'
        <h1 class="text-2xl text-violet-400 font-semibold text-start">
            Laravel Livewire</h1>
        HTML;
    }
}
