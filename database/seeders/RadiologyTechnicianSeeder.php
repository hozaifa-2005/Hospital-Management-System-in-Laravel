<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RadiologyTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('radiology_technicians')->insert([
            ['employee_id' => 4, 'device_specialization' => 'X-ray, MRI'],
            ['employee_id' => 5, 'device_specialization' => 'CT scan'],
        ]);
    }
}
