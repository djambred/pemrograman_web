<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CostumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            DB::table('costumers')->insert([
                'full_name' => 'John Doe',
                'username' => 'john',
                'email' => 'john@email.com',
                'phone_number' => '08123456789',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }
}
