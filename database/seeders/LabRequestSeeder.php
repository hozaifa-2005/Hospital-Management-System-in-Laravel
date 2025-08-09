<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lab_requests')->insert([
            ['patient_id' => 1, 'doctor_id' => 1, 'test_type' => 'Blood Sugar', 'requested_at' => now()],
            ['patient_id' => 2, 'doctor_id' => 2, 'test_type' => 'Complete Blood Count', 'requested_at' => now()],
        ]);
    }
}
