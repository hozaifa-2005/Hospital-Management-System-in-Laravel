<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lab_technicians')->insert([
            ['employee_id' => 1, 'lab_section' => 'Hematology'],
            ['employee_id' => 2, 'lab_section' => 'Microbiology'],
        ]);
    }
}
