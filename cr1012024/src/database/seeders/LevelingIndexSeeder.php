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
            LevelingIndex::firstOrCreate(
                ['name' => $level],  // Condition to check if record exists
                ['name' => $level,
                 'indicator_id' => 1
                ]   // Values to create if it doesn't exist
            );
        }
    }
}
