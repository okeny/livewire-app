<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class SearchProduct extends Component
{  
    public $query="";
    public $products=[];

    public function handle_search(){
        
        $this->products = DB::table('products')
        ->join('categories', 'products.category_id', 'categories.id')
       
        ->select('products.name', 'products.price', 'categories.name as cat_name')
        ->where('products.name', 'like', '%' .$this->query. '%')
        ->get();
    }
    public function render()
    {
        return view('livewire.search-product');
    }
}
