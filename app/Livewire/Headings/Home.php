<?php

namespace App\Livewire\Headings;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return <<<'HTML'
        <h1 class="ml-4 mt-4 text-2xl font-semibold text-start">
            Laravel Livewire</h1>
        HTML;
    }
}
