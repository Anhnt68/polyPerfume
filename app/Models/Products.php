<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desc', 'image', 'cate_id'];

    public function Category()
    {
        return $this->belongsTo(Categories::class, 'cate_id', 'id');
    }
   
}
