<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use App\Models\Categories;

class CreateProduct extends Component
{

    public $categories =[];
    public $name;
    public $price;
    public $category_id;

    protected $rules = [
        'name' => 'required|string|min:2|max:30',
        'price' => 'required|numeric',
        'category_id'=> 'required|numeric'
    ];

    public function store(){

        $validData = $this->validate($this->rules);
        Products::create($validData);
        $this->reset();
        session()->flash('message', 'Product successfully updated.');
    }

    public function render()
    {
        $this->categories = Categories::all();
        return view('livewire.create-product');
    }
}
