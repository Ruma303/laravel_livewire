<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("Posts")]
class Index extends Component
{
    public $posts;

    public function generate_posts()
    {
        Post::factory(10)->create();
    }

    public function mount()
    {
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.posts.index');
    }
}
