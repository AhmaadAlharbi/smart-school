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
        DB::table('my__parents')->insert([
            [
                'Name_Father' => json_encode(['en' => 'Mohammed Alharbi', 'ar' => 'محمد الحربي']),
                'National_ID_Father' => '9658745233',
                'Passport_ID_Father' => '1236544123',
                'Phone_Father' => '1234567890',
                'Job_Father' => json_encode(['en' => 'Engineer', 'ar' => 'مهندس']),
                'Nationality_Father_id' => Nationalitie::pluck('id')->random(), // Assuming nationality ID
                'Blood_Type_Father_id' => Type_Blood::pluck('id')->random(), // Assuming blood type ID
                'Religion_Father_id' => Religion::pluck('id')->random(), // Assuming religion ID
                'Address_Father' => '123 Main St, City',
                'Name_Mother' => json_encode(['en' => 'Aloya', 'ar' => 'عالية']),
                'National_ID_Mother' => '7452154796',
                'Passport_ID_Mother' => '23146879665',
                'Phone_Mother' => '9876543210',
                'Job_Mother' => json_encode(['en' => 'Teacher', 'ar' => 'معلمة']),
                'Nationality_Mother_id' => Nationalitie::pluck('id')->random(), // Assuming nationality ID
                'Blood_Type_Mother_id' => Type_Blood::pluck('id')->random(), // Assuming blood type ID
                'Religion_Mother_id' => Religion::pluck('id')->random(), // Assuming religion ID
                'Address_Mother' => '456 Elm St, City',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name_Father' => json_encode(['en' => 'Ahmad Zaid', 'ar' => 'أحمد زيد']),
                'National_ID_Father' => '123456789',
                'Passport_ID_Father' => 'ABC123',
                'Phone_Father' => '1234567890',
                'Job_Father' => json_encode(['en' => 'Engineer', 'ar' => 'مهندس']),
                'Nationality_Father_id' => Nationalitie::pluck('id')->random(), // Assuming nationality ID
                'Blood_Type_Father_id' => Type_Blood::pluck('id')->random(), // Assuming blood type ID
                'Religion_Father_id' => Religion::pluck('id')->random(), // Assuming religion ID
                'Address_Father' => '123 Main St, City',
                'Name_Mother' => json_encode(['en' => 'ِAbrar', 'ar' => 'أبرار']),
                'National_ID_Mother' => '987654321',
                'Passport_ID_Mother' => 'XYZ789',
                'Phone_Mother' => '9876543210',
                'Job_Mother' => json_encode(['en' => 'Teacher', 'ar' => 'معلمة']),
                'Nationality_Mother_id' => Nationalitie::pluck('id')->random(), // Assuming nationality ID
                'Blood_Type_Mother_id' => Type_Blood::pluck('id')->random(), // Assuming blood type ID
                'Religion_Mother_id' => Religion::pluck('id')->random(), // Assuming religion ID
                'Address_Mother' => '456 Elm St, City',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more parent records as needed
        ]);
    }
}
