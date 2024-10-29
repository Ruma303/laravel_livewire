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
        // Aggiornare la lista dei post dopo la creazione, altrimenti li vedrai all'aggiornamento di pagina
        $this->posts = Post::all();
        //$this->posts = array_merge($this->posts->toArray(), $newPosts->toArray()); // aggiornare solo i nuovi post
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
