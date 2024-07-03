<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $connection = 'mysql';
    protected $table = 'orders';

    public function costumer(){
        return $this->belongTo('App\Models\Costumer');
    }

    public function order_item(){
        return $this->hasMany('App\Models\OrderItem');
    }

}
