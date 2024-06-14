<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            DB::table('users')->insert([
                'username' => 'client';
                'password' => 'password';
                'created_at' => $timestamp;
                'update_at' => $timestamp;
            ]);
    }
}
