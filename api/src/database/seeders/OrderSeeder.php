<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table('orders')->insert([
            'costumer_id' => '1',
            'status' => 'pending',
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ]);
    }
}
