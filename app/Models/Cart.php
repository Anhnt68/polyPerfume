<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'stock_id'
    ];
    public function Product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function Stock()
    {
        return $this->belongsTo(Stocks::class, 'stock_id', 'id');
    }
    public $timestamps = true;
}