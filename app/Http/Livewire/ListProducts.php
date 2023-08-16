<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ListProducts extends Component
{
    public $products=[];

    public function render()
    {
        $this->products = DB::table('products')
        ->join('categories', 'products.category_id', 'categories.id')
        ->select('products.name', 'products.price', 'categories.name as cat_name')
        ->get();
        return view('livewire.list-products');
    }
}
