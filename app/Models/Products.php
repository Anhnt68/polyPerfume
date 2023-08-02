<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\Stocks;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desc', 'image', 'cate_id'];

    public function Category()
    {
        return $this->belongsTo(Categories::class, 'cate_id', 'id');
    }
    public function stocks() {
        return $this->hasMany(Stocks::class, 'product_id', 'id');
    }
}
