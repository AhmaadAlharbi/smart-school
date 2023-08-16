<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arabicNames = ['محمد', 'أحمد', 'علي', 'عمر', 'خالد', 'يوسف', 'زيد', 'طارق', 'عبدالله', 'جمال'];

        $teachers = [];

        for ($i = 1; $i <= 10; $i++) {
            $teacherArabicName = $arabicNames[array_rand($arabicNames)];

            $teachers[] = [
                'Name' => json_encode(['en' => 'Teacher ' . $i, 'ar' => 'مدرس ' . $teacherArabicName]),
                'Specialization_id' => rand(1, 4), // Assuming specialization IDs
                'Gender_id' => rand(1, 2), // Assuming gender IDs
                'Joining_Date' => '2022-01-01',
                'Address' => 'Teacher ' . $i . ' Address',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('teachers')->insert($teachers);
    }
}
