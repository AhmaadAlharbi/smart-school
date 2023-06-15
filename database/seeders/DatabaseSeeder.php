<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\GradeSeeder;
use Database\Seeders\ClassroomSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\religionTableSeeder;
use Database\Seeders\BloodTableSeeder;
use Database\Seeders\SectionsSeeder;
use Database\Seeders\ParentsSeeder;
use Database\Seeders\StudentsSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BloodTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(religionTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(SectionsSeeder::class);
        $this->call(ParentsSeeder::class);
        $this->call(StudentsSeeder::class);

    }
}
