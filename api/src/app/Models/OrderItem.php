<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $connection = 'mysql';
    protected $table = 'order_items';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
