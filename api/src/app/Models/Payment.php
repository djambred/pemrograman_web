<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $connection = 'mysql';
    protected $table = 'payments';
    protected $primaryKey = 'id';

    

    public function order(){
        return $this->belongsTo('App\Models\Order');
    }


    public static function getById($id)
    {
        return self::find($id);
    }
}
