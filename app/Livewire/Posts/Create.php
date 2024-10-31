<?php

namespace App\Livewire\Posts;

use Str;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

#[Title("Create Posts")]
class Create extends Component
{
    #[Rule(rule: 'required', as: 'titolo', message: 'Il campo :attribute è obbligatorio')]
    #[Rule(rule: 'unique', as: 'titolo', message: 'Il campo :attribute dev\'essere unico')]
    public $title = '';

    #[Rule(rule: 'required', as: 'descrizione', message: 'Il campo :attribute è obbligatorio')]
    public $body = '';

    public function save()
    {
        $this->validate();

        Post::create([
            "title" => $this->title,
            "body" => $this->body,
            "slug" => Str::slug($this->title)
        ]);

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
