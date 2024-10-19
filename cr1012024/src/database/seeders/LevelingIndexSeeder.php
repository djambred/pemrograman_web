<?php

namespace Database\Seeders;

use App\Models\LevelingIndex;
use Illuminate\Database\Seeder;

class LevelingIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            'Level 1',
            'Level 2',
            'Level 3',
            'Level 4',
            'Level 5',
        ];

        foreach ($levels as $level) {
            for ($indicatorId = 1; $indicatorId <= 47; $indicatorId++) {
                LevelingIndex::firstOrCreate(
                    ['name' => $level, 'indicator_id' => $indicatorId],  // Condition to check if record exists
                    ['name' => $level]  // Values to create if it doesn't exist
                );
            }
        }
    }
}
