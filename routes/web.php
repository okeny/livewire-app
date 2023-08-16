<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ListProducts;
use App\Http\Livewire\CategoryProducts;
use App\Http\Livewire\CreateProduct;
use App\Http\Livewire\SearchProduct;

Route::get('/', ListProducts::class);

Route::get('/products', ListProducts::class );

Route::get('/categories/{id}', CategoryProducts::class);

Route::get('/products/create',CreateProduct::class);

Route::get('/search',SearchProduct::class);


