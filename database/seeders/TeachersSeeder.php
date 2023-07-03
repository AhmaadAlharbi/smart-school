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
        // Define the data to be inserted
        $teachers = [
            [

                'Name' => 'Teacher 1',
                'Specialization_id' => 1, // Assuming the specialization ID
                'Gender_id' => 1, // Assuming the gender ID
                'Joining_Date' => '2022-01-01',
                'Address' => 'Teacher 1 Address',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more teacher data as needed
        ];

        // Insert the data into the teachers table
        DB::table('teachers')->insert($teachers);
    }
}
