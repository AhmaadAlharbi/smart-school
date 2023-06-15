<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            [
                'Name_Class' => json_encode(['en' => 'Class 1', 'ar' => 'الصف الأول']),
                'Grade_id' => 1,
            ],
            [
                'Name_Class' => json_encode(['en' => 'Class 2', 'ar' => 'الصف الثاني']),
                'Grade_id' => 1,
            ],
            [
                'Name_Class' => json_encode(['en' => 'Class 1', 'ar' => 'الصف الاول']),
                'Grade_id' => 2,
            ],
        ]);
    }
}
