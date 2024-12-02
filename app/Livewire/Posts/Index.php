<?php

namespace App\Livewire\Posts;

use App\Livewire\Layouts\AdminLayout;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;

#[Title("Posts")]
class Index extends AdminLayout
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

    #[On('posts:searchUpdated')]
    public function updateResults($results)
    {
        $this->results = Post::hydrate($results);
    }

    #[On('posts:clearSearch')]
    public function clearResults()
    {
        $this->results = $this->posts;
    }

    public function render()
    {
        return view('livewire.posts.index')
        ->layout('components.layouts.admin', ['title' => 'Manage Posts']);
    }
}