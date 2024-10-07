<?php

namespace Database\Seeders;

use App\Models\Analyze;
use App\Models\Aspect;
use App\Models\DetailLevelingIndex;
use App\Models\Domain;
use App\Models\Indicator;
use App\Models\LevelingIndex;
use App\Models\Recomendation;
use App\Models\Subject;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->seedUsers();
        $this->callSeeders();
        
    }

    private function seedUsers(): void{
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);
    
        $user->assignRole('super_admin');
    }
    

    private function callSeeders(): void
    {
        $this->call([
            DomainSeeder::class,
            AspectSeeder::class,
            LevelingIndexSeeder::class,
            DetailLevelingIndexSeeder::class,
            IndicatorSeeder::class,
            SubjectSeeder::class,
            RecomendationSeeder::class,
            AnalyzeSeeder::class,
        ]);
    }
}
