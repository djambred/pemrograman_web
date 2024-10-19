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
        $data = [
            'Kabupaten Maros',
            'Kabupaten Bulukumba',
            'Kabupaten Sinjai',
            'Kabupaten Luwu',
        ];

        foreach ($data as $name) {
        Subject::firstOrCreate(
            ['name' => $name], // Condition to check if record exists
            ['name' => $name]  // Values to create if it doesn't exist
        );
        }
    }
}
