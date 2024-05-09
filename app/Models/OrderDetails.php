<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $table = 'orderDetail';
    protected $primaryKey = 'id';
    protected $fillable = ['orderId', 'productId', 'price','qty','subAmount', 'discount', 'discountType', 'grandAmount' ];
    public $timestamps = false;
    use HasFactory;
}
