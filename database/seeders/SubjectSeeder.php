<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'name' => json_encode(['en' => 'Arabic', 'ar' => 'عربي']),
                'specialization_id' => 1, // Assuming specialization ID for Arabic
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Science', 'ar' => 'علوم']),
                'specialization_id' => 2, // Assuming specialization ID for Sciences
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Computer', 'ar' => 'حاسب الي']),
                'specialization_id' => 3, // Assuming specialization ID for Computer
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'English', 'ar' => 'انجليزي']),
                'specialization_id' => 4, // Assuming specialization ID for English
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Math', 'ar' => 'رياضيات']),
                'specialization_id' => 2, // Assuming specialization ID for Sciences
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'History', 'ar' => 'تاريخ']),
                'specialization_id' => 2, // Assuming specialization ID for Sciences
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Geography', 'ar' => 'جغرافيا']),
                'specialization_id' => 2, // Assuming specialization ID for Sciences
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Physics', 'ar' => 'فيزياء']),
                'specialization_id' => 2, // Assuming specialization ID for Sciences
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Grammar', 'ar' => 'قواعد اللغة']),
                'specialization_id' => 4, // Assuming specialization ID for English
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Vocabulary', 'ar' => 'مفردات']),
                'specialization_id' => 4, // Assuming specialization ID for English
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Literature', 'ar' => 'أدب']),
                'specialization_id' => 4, // Assuming specialization ID for English
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Arabic Literature', 'ar' => 'أدب عربي']),
                'specialization_id' => 1, // Assuming specialization ID for Arabic
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Grammar', 'ar' => 'قواعد']),
                'specialization_id' => 1, // Assuming specialization ID for Arabic
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Writing', 'ar' => 'كتابة']),
                'specialization_id' => 1, // Assuming specialization ID for Arabic
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more subjects and corresponding specialization IDs as needed
        ]);
    }
}
