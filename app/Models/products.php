<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class products extends Model
{
    use HasFactory;
    
    protected $fillable = ['category_id', 'name','price'];

    public function categories(){
        return $this->belongsTo(Categories::class);
    }
}
