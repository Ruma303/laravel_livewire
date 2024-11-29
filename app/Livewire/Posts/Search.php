<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public $search_post;
    public $placeholder = "Search post...";

    public function clearSearch()
    {
        $this->search_post = '';
        $this->results = Post::all();
    }

    public function render()
    {
        return view('livewire.posts.search');
    }
}
