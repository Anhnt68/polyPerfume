<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Capacities;
use App\Models\Products;


class Stocks extends Model
{
    use HasFactory;
    protected $fillable = ['quantity', 'price', 'product_id', 'capacity_id'];

    public function Product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
    public function Capacity()
    {
        return $this->hasOne(Capacities::class, 'id', 'capacity_id');
    }
}
