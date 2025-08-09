<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RadiologyRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('radiology_requests')->insert([
            ['patient_id' => 1, 'doctor_id' => 1, 'image_type' => 'Chest X-ray', 'requested_at' => now()],
            ['patient_id' => 2, 'doctor_id' => 2, 'image_type' => 'Brain MRI', 'requested_at' => now()],
        ]);
    }
}
