<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recomendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'indicator_id', 'leveling_index_id', 'detail_leveling_index_id', 'recommend',
    ];

    protected $casts = [

    ];

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(Indicator::class, 'indicator_id');
    }

    public function indexLeveling(): BelongsTo
    {
        return $this->belongsTo(LevelingIndex::class, 'leveling_index_id');
    }

    public function detailLevelingIndex(): BelongsTo
    {
        return $this->belongsTo(DetailLevelingIndex::class, 'detail_leveling_index_id');
    }
}
