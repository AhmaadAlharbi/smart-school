<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Nationalitie;
use App\Models\Type_Blood;
use App\Models\Religion;

class ParentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arabicNames = ['أحمد', 'محمد', 'علي', 'عمر', 'محمود', 'ياسين', 'أيمن', 'خالد', 'صالح', 'فهد'];

        $numberOfRecords = 10;

        for ($i = 1; $i <= $numberOfRecords; $i++) {
            $fatherArabicName = $arabicNames[array_rand($arabicNames)];
            $motherArabicName = $arabicNames[array_rand($arabicNames)];

            DB::table('my__parents')->insert([
                'Name_Father' => json_encode(['en' => 'Father Name ' . $i, 'ar' => $fatherArabicName]),
                'National_ID_Father' => 'F-NID-' . $i,
                'Passport_ID_Father' => 'F-Passport-' . $i,
                'Phone_Father' => 'F-Phone-' . $i,
                'Job_Father' => json_encode(['en' => 'Engineer', 'ar' => 'مهندس']),
                'Nationality_Father_id' => rand(1, 10), // Replace with valid IDs
                'Blood_Type_Father_id' => rand(1, 5),  // Replace with valid IDs
                'Religion_Father_id' => rand(1, 3),    // Replace with valid IDs
                'Address_Father' => 'Father Address ' . $i,
                'Name_Mother' => json_encode(['en' => 'Mother Name ' . $i, 'ar' => $motherArabicName]),
                'National_ID_Mother' => 'M-NID-' . $i,
                'Passport_ID_Mother' => 'M-Passport-' . $i,
                'Phone_Mother' => 'M-Phone-' . $i,
                'Job_Mother' => json_encode(['en' => 'Teacher', 'ar' => 'معلمة']),
                'Nationality_Mother_id' => rand(1, 10), // Replace with valid IDs
                'Blood_Type_Mother_id' => rand(1, 5),  // Replace with valid IDs
                'Religion_Mother_id' => rand(1, 3),    // Replace with valid IDs
                'Address_Mother' => 'Mother Address ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
