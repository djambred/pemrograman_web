<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Analyze extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id', 'indicator_id', 'leveling_index_id', 'detail_leveling_index_id', 'recomendation_id', 'note',
    ];

    protected $casts = [

    ];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(Indicator::class, 'indicator_id');
    }

    public function leveling(): BelongsTo
    {
        return $this->belongsTo(LevelingIndex::class, 'leveling_index_id');
    }

    public function detailLevelingIndex(): BelongsTo
    {
        return $this->belongsTo(DetailLevelingIndex::class, 'detail_leveling_index_id');
    }

    public function recomendation(): BelongsTo
    {
        return $this->belongsTo(Recomendation::class, 'recomendation_id');
    }
}
