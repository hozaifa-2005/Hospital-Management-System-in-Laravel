<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_users')->insert([
            ['employee_id' => 1, 'username' => 'ali_h', 'password' => bcrypt('password123')],
            ['employee_id' => 2, 'username' => 'sara_o', 'password' => bcrypt('password123')],
            ['employee_id' => 3, 'username' => 'ahmed_o', 'password' => bcrypt('password123')],
            ['employee_id' => 4, 'username' => 'medea_o', 'password' => bcrypt('password123')],
            ['employee_id' => 5, 'username' => 'salalo_o', 'password' => bcrypt('password123')],
        ]);
    }
}
