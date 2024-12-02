<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("Post")]
class Show extends Component
{
    public Post $post;

    public function mount($id)
    {
        $this->post = Post::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.posts.show');
    }
}
