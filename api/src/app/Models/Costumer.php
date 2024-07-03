<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'costumers';

    public function order(){
        return $this->hasMany('App\Models\Order');
    }

}
