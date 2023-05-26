<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;

class UserSeeder  extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ahmad',
            'email' => 'ahmaadzaid7@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1
            // 'role_id' => Role::all()->random()->id
        ]);
    }
}
