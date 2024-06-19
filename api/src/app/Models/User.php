<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'username',
    ];
    protected $hidden = [
        'password',
    ];
}
