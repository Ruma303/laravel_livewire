<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("Posts")]
class Index extends Component
{
    public $posts;
    #[Validate('required')]
    public $search_post;
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
        $this->results = $this->posts; // Inizializziamo i risultati con tutti i post
    }


    public function updatedSearchPost($value)
    {
        if ($value) {
            // Se c'è un valore, eseguiamo la ricerca
            $this->results = Post::where('title', 'like', '%' . $value . '%')->get();
        } else {
            // Se non c'è un valore, mostriamo tutti i post
            $this->results = Post::all();
        }
    }

    public function clearSearch()
    {
        $this->search_post = ''; // Svuota il campo di ricerca
        $this->results = Post::all(); // Mostra tutti i post
    }


    public function render()
    {
        return view('livewire.posts.index');
    }

    // Gestire la ricerca direttamente in render()
    /* public function render()
    {
        $this->results = $this->search_post
            ? Post::where('title', 'like', '%' . $this->search_post . '%')->get()
            : Post::all();

        return view('livewire.posts.index');
    } */
}
