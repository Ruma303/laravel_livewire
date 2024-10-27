<?php

use App\Livewire\Todos;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get("/", fn() => to_route("todos"));
Route::get('/todos', action: Todos::class)->name("todos");
Route::get('/counter', Counter::class)->name("counter");