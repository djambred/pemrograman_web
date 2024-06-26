<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $connection = 'mysql';
    protected $fillable = [
        'name', 'price', 'qty'
    ];

    
}
