<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stocks;

class orderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'stock_id',
        'product_id',
        'sum_price',
        'sum_quantity'
    ];
    public $timestamps = true;

    public function order()
    {
        return $this->belongsTo(orders::class, 'order_id', 'id');
    }

    public function stock()
    {
        return $this->belongsTo(Stocks::class, 'stock_id', 'id');
    }public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }

    function get_ttttt($x)
    {
        switch ($x) {
            case '0':
                $status = "Thanh toán khi nhận hàng";
                break;
            case '1':
                $status = "Chuyển khoản";
                break;
            case '2':
                $status = "Thanh toán qua momo";
                break;
            default:
                $status = "Thanh toán khi nhận hàng";
                break;
        }
        return $status;
    }
}
