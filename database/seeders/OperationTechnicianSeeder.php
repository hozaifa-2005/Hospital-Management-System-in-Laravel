<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperationTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operation_technicians')->insert([
            ['employee_id' => 2, 'operation_experience' => '5 years experience in general surgeries'],
            ['employee_id' => 3, 'operation_experience' => '3 years experience in orthopedic surgeries'],
        ]);
    }
}
