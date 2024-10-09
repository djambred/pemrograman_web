<?php

namespace Database\Seeders;

use App\Models\Indicator;
use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indicators = [
            // Assigning domains
            ['range' => [1, 10], 'domain_id' => 1],
            ['range' => [11, 20], 'domain_id' => 2],
            ['range' => [21, 31], 'domain_id' => 3],
            ['range' => [32, 47], 'domain_id' => 4],
        ];

        // Assigning aspects
        $aspects = [
            ['range' => [1, 10], 'aspect_id' => 1],
            ['range' => [11, 14], 'aspect_id' => 2],
            ['range' => [15, 18], 'aspect_id' => 3],
            ['range' => [19, 20], 'aspect_id' => 4],
            ['range' => [21, 28], 'aspect_id' => 5],
            ['range' => [29, 31], 'aspect_id' => 6],
            ['range' => [32, 44], 'aspect_id' => 7],
            ['range' => [45, 47], 'aspect_id' => 8],
        ];

        foreach ($indicators as $indicator) {
            for ($i = $indicator['range'][0]; $i <= $indicator['range'][1]; $i++) {
                // Find the appropriate aspect_id for the current indicator
                $aspect_id = null;
                foreach ($aspects as $aspect) {
                    if ($i >= $aspect['range'][0] && $i <= $aspect['range'][1]) {
                        $aspect_id = $aspect['aspect_id'];
                        break;
                    }
                }

                Indicator::firstOrCreate(
                    ['name' => 'Indikator '.$i],
                    [
                        'name' => 'Indikator '.$i,
                        'domain_id' => $indicator['domain_id'], // Assign domain dynamically
                        'aspect_id' => $aspect_id,              // Assign aspect dynamically
                    ]
                );
            }
        }

    }
}
