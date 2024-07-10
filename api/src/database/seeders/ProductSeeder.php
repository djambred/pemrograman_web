<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = Carbon::now()->toDateTimeString();
        DB::table('products')->insert([
            'name' => 'Book',
            'price' => 5000,
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ]);
    }
}
