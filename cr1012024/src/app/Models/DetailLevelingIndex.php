<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailLevelingIndex extends Model
{
    use HasFactory;

    protected $fillable = [
        'leveling_index_id', 'detail', 'description',
    ];

    protected $casts = [

    ];

    public function levelingIndex(): BelongsTo
    {
        return $this->belongsTo(LevelingIndex::class, 'levelingindex_id');
    }
}
