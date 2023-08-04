<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_name',
        'order_address',
        'order_email'
,        'order_phone',
        'order_PTTT',
        'order_status',
        'user_id'
    ];
}
