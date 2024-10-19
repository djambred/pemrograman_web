<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelingIndex extends Model
{
    use HasFactory;

    protected $fillable = [
        'indicator_id', 'name',
    ];

    protected $casts = [

    ];

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(Indicator::class, 'indicator_id');
    }
}
