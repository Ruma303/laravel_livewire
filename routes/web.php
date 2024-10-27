<?php

use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\Users\Index;
use Illuminate\Support\Facades\Route;

Route::get("/", fn() => to_route("todos"));
Route::get('/users', action: Index::class)->name("users");
Route::get('/todos', action: Todos::class)->name("todos");
Route::get('/counter', Counter::class)->name("counter");