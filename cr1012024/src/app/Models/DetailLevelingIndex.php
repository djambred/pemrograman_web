<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetailLevelingIndex extends Model
{
    use HasFactory;

    protected $fillable = [
        'indicator_id','leveling_index_id', 'detail', 'description',
    ];

    protected $casts = [

    ];

    public function levelingIndex(): BelongsTo
    {
        return $this->belongsTo(LevelingIndex::class, 'leveling_index_id');
    }

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(Indicator::class, 'indicator_id');
    }
}
