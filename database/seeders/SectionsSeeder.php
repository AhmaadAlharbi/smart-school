<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            [
                'Name_Section' => json_encode(['en' => 'Class A', 'ar' => 'الصف أ']),
                'status' => 1,
                'Grade_id' => 1,
                'Class_id' => 1
            ],
            [
                'Name_Section' => json_encode(['en' => 'Class B', 'ar' => 'الصف ب']),
                'status' => 1,
                'Grade_id' => 1,
                'Class_id' => 2
            ],
            [
                'Name_Section' => json_encode(['en' => 'Class A', 'ar' => 'الصف أ']),
                'status' => 1,
                'Grade_id' => 2,
                'Class_id' => 3
            ],
        ]);
    }
}
