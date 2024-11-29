<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;

#[Title("Posts")]
class Index extends Component
{
    public $posts; // Tutti i post
    public $results = []; // Risultati della ricerca

    public function generate_posts()
    {
        Post::factory(10)->create(); // Genera 10 post di esempio
        $this->posts = Post::all(); // Recupera tutti i post dal database
        $this->results = $this->posts; // Inizializza i risultati
    }

    public function mount()
    {
        $this->posts = Post::all(); // Recupera tutti i post al caricamento
        $this->results = $this->posts; // Inizializza i risultati
    }

    #[On('posts:searchUpdated')]
    public function updateResults($results)
    {
        // Convertire i risultati in una collezione Eloquent
        $this->results = collect($results);
        # $this->results = $results; // Aggiorna i risultati ricevuti dal componente figlio
    }

    #[On('posts:clearSearch')]
    public function clearResults()
    {
        $this->results = $this->posts; // Resetta i risultati alla lista completa di post
    }

    public function render()
    {
        return view('livewire.posts.index');
    }
}