<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::firstOrCreate(
            ['name' => 'Kabupaten Testing'], // Condition to check if record exists
            ['name' => 'Kabupaten Testing']  // Values to create if it doesn't exist
        );
    }
}
