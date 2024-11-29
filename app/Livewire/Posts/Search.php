<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Search extends Component
{
    public $search_post = ''; // Campo di ricerca
    public $placeholder = "Search post..."; // Placeholder per l'input
    public $results = []; // Risultati passati dal genitore

    public function updatedSearchPost($value)
    {
        // Filtra i risultati in base al valore dell'input
        $this->results = $value
            ? Post::where('title', 'like', '%' . $value . '%')->get()
            : Post::all();

        // Notifica il genitore dei risultati aggiornati
        $this->dispatch('posts:searchUpdated', $this->results);

        // dd($this->results);
    }

    public function clearSearch()
    {
        $this->search_post = ''; // Svuota il campo di ricerca
        $this->dispatch('posts:clearSearch'); // Notifica il genitore di resettare i risultati
    }

    public function render()
    {
        return view('livewire.posts.search');
    }
}