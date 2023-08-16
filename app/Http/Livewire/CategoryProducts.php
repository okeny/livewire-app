<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Illuminate\Support\Facades\DB;


class CategoryProducts extends Component
{
    public $products=[];

    public function mount($id)
    {
        $this->products = DB::table('products')
        ->join('categories', 'products.category_id', 'categories.id')
        ->select('products.name', 'products.price', 'categories.name as cat_name')
        ->where('products.category_id',$id)
        ->get();
        return view('livewire.category-products');
    }
}
