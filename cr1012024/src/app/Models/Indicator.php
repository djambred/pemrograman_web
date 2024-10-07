<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Indicator extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain_id', 'aspect_id', 'name', 'detail', 'description', 'score_criteria',
    ];

    protected $casts = [

    ];

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }

    public function aspect(): BelongsTo
    {
        return $this->belongsTo(Aspect::class, 'aspect_id');
    }
}
