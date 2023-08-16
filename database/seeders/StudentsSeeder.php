<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arabicNames = ['يوسف احمد', 'زيد محمد', 'عيسي محمد', 'علي أحمد', 'محمد زياد', 'أحمد يوسف', 'عبدالله زين', 'مصطفى خالد', 'أمين علي', 'عبدالرحمن جمال'];

        $numberOfRecords = 10;

        for ($i = 1; $i <= $numberOfRecords; $i++) {
            $studentArabicName = $arabicNames[array_rand($arabicNames)];
            DB::table('students')->insert([
                'name' => json_encode(['en' => 'Student Name ' . $i, 'ar' => $studentArabicName]),
                'gender_id' => rand(1, 2), // Assuming gender IDs 1 and 2
                'nationalitie_id' => rand(1, 2), // Assuming nationality IDs
                'blood_id' => rand(1, 2), // Assuming blood type IDs
                'Date_Birth' => '2005-06-15', // Modify the birthdate as needed
                'Grade_id' => rand(1, 2), // Assuming grade IDs
                'Classroom_id' => rand(1, 3), // Assuming classroom IDs
                'section_id' => rand(1, 3), // Assuming section IDs
                'parent_id' => rand(1, 10), // Assuming parent IDs
                'academic_year' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
