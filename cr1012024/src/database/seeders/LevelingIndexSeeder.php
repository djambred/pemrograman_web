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

        for ($indicatorId = 1; $indicatorId <= 47; $indicatorId++) {
            foreach ($levels as $level) {
                LevelingIndex::firstOrCreate(
                    [
                        'name' => $level,           // Condition to check if record exists
                        'indicator_id' => $indicatorId  // Condition for indicator_id
                    ], 
                    [
                        'name' => $level,
                        'indicator_id' => $indicatorId   // Values to create if it doesn't exist
                    ]
                );
            }
        }
    }
}
