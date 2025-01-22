<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', \App\Livewire\Products\Pages\ProductList::class)->name('products');
