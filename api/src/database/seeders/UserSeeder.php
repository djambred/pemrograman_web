<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            DB::table('users')->insert([
                'username' => 'client',
                'email' => 'djambred@gmail.com',
                //'password' => Hash::make('password'),
                'password' => 'password',
                'token' => 'password',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }
}
