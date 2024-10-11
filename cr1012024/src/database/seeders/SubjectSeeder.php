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
            'Kabupaten Luwu',
            'Kabupaten Bulukumba',
            'Kabupaten Sinjai'
        ];
        foreach ($data as $subjectName) {
            Subject::firstOrCreate(
                ['name' => $subjectName], // Condition to check if record exists
                ['name' => $subjectName]  // Values to create if it doesn't exist
            );
        }
    }
}
