<?php

use Illuminate\Support\Facades\Route;
use \App\Livewire\Categories;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', Categories::class)->name('categories');
