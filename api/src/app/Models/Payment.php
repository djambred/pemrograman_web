<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $connection = 'mysql';
    protected $table = 'payments';

    public function order(){
        return $this->belongsTo('App\Models\Order');
    }
}
