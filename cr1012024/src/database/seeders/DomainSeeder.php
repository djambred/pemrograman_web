<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $domain = [
            'Domain Kebijakan',
            'Domain Tata Kelola',
            'Domain Manajemen',
            'Domain Layanan',
        ];

        foreach ($domain as $domain) {
            Domain::firstOrCreate(
                ['name' => $domain], // Condition to check if record exists
                ['name' => $domain]  // Values to create if it doesn't exist
            );
        }

    }
}
