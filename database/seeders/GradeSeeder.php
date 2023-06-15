<?php

namespace Database\Seeders;

use App\Models\Grade;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();

        $grades = [
            ['en' => 'Elementray School', 'ar' => 'المرحلة الابتدائية'],
            ['en' => 'Secondary School', 'ar' => 'المرحلة الاعدادية'],

        ];
        foreach ($grades as $grade) {
            Grade::create(['Name' => $grade]);
        }
    }
}
