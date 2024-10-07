<?php

namespace Database\Seeders;

use App\Models\Aspect;
use Illuminate\Database\Seeder;

class AspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aspect::firstOrCreate(
            ['name' => 'Kebijakan Internal Tata Kelola SPBE'], // Condition to check if record exists
            ['name' => 'Kebijakan Internal Tata Kelola SPBE']  // Values to create if it doesn't exist
        );
        Aspect::firstOrCreate(
            ['name' => 'Perencanaan Strategis SPBE'], // Condition to check if record exists
            ['name' => 'Perencanaan Strategis SPBE']  // Values to create if it doesn't exist
        );
        Aspect::firstOrCreate(
            ['name' => 'Teknologi Informasi dan Komunikasi'], // Condition to check if record exists
            ['name' => 'Teknologi Informasi dan Komunikasi']  // Values to create if it doesn't exist
        );
        Aspect::firstOrCreate(
            ['name' => 'Penyelenggara SPBE'], // Condition to check if record exists
            ['name' => 'Penyelenggara SPBE']  // Values to create if it doesn't exist
        );
        Aspect::firstOrCreate(
            ['name' => 'Penerapan Manajemen SPBE'], // Condition to check if record exists
            ['name' => 'Penerapan Manajemen SPBE']  // Values to create if it doesn't exist
        );
        Aspect::firstOrCreate(
            ['name' => 'Pelaksanaan Audit TIK'], // Condition to check if record exists
            ['name' => 'Pelaksanaan Audit TIK']  // Values to create if it doesn't exist
        );
        Aspect::firstOrCreate(
            ['name' => 'Layanan Administrasi Pemerintahan Berbasis Elektronik'], // Condition to check if record exists
            ['name' => 'Layanan Administrasi Pemerintahan Berbasis Elektronik']  // Values to create if it doesn't exist
        );
        Aspect::firstOrCreate(
            ['name' => 'Layanan Publik Berbasis Elektronik'], // Condition to check if record exists
            ['name' => 'Layanan Publik Berbasis Elektronik']  // Values to create if it doesn't exist
        );
    }
}
