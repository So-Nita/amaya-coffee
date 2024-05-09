<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $fillable = ['productId', 'qty', 'userId'];
    public $timestamps = false;
    
    use HasFactory;
}
