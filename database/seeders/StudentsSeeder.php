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
        DB::table('students')->insert([
            [
                'name' => json_encode(['en' => 'Yousef ahamd ', 'ar' => ' يوسف احمد']),
                'gender_id' => 1, // Assuming gender ID
                'nationalitie_id' => 1, // Assuming nationality ID
                'blood_id' => 1, // Assuming blood type ID
                'Date_Birth' => '2005-06-15',
                'Grade_id' => 1, // Assuming grade ID
                'Classroom_id' => 1, // Assuming classroom ID
                'section_id' => 1, // Assuming section ID
                'parent_id' => 1, // Assuming parent ID
                'academic_year' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Zaid mohammed', 'ar' => 'زيد محمد']),
                'gender_id' => 2, // Assuming gender ID
                'nationalitie_id' => 2, // Assuming nationality ID
                'blood_id' => 2, // Assuming blood type ID
                'Date_Birth' => '2006-07-20',
                'Grade_id' => 1, // Assuming grade ID
                'Classroom_id' => 1, // Assuming classroom ID
                'section_id' => 1, // Assuming section ID
                'parent_id' => 2, // Assuming parent ID
                'academic_year' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => json_encode(['en' => 'Eissa Mohammed', 'ar' => 'عيسي محمد']),
                'gender_id' => 2, // Assuming gender ID
                'nationalitie_id' => 2, // Assuming nationality ID
                'blood_id' => 2, // Assuming blood type ID
                'Date_Birth' => '2006-07-20',
                'Grade_id' => 1, // Assuming grade ID
                'Classroom_id' => 1, // Assuming classroom ID
                'section_id' => 1, // Assuming section ID
                'parent_id' => 2, // Assuming parent ID
                'academic_year' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
