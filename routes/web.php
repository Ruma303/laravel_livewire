<?php

use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\Users\Index as UserIndex;
use App\Livewire\Posts\Index as PostIndex;
use App\Livewire\Posts\Create as PostCreate;
use App\Livewire\Posts\Show as PostShow;
use Illuminate\Support\Facades\Route;

Route::get("/", fn() => to_route("todos"));
Route::get('/users', action: UserIndex::class)->name("users");
Route::get('/posts', action: PostIndex::class)->name("posts.index");
Route::get('/posts/{id}', action: PostShow::class)->name("posts.show");
Route::get('/posts/create', action: PostCreate::class)->name("posts.create");
Route::get('/todos', action: Todos::class)->name("todos");
Route::get('/counter', Counter::class)->name("counter");