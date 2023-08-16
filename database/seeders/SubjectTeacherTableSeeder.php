<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTeacherTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('subject_teacher')->insert([
            [
                'teacher_id' => 1, // Replace with the actual teacher ID
                'subject_id' => 1, // Replace with the actual subject ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'teacher_id' => 1, // Replace with the actual teacher ID
                'subject_id' => 2, // Replace with the actual subject ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries as needed
        ]);
    }
}
