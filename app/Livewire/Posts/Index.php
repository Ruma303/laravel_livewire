<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("Posts")]
class Index extends Component
{
    public $posts;
    public $results = [];

    public function generate_posts()
    {
        Post::factory(10)->create();
        $this->posts = Post::all();
        $this->results = $this->posts;
    }

    public function mount()
    {
        $this->posts = Post::all();
        $this->results = $this->posts;
    }

    public function updatedSearchPost($value)
    {
        if ($value) {
            $this->results = Post::where('title', 'like', '%' . $value . '%')->get();
        } else {
            $this->results = Post::all();
        }
    }

    public function render()
    {
        return view('livewire.posts.index');
    }
}
