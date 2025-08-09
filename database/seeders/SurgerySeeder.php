<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurgerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surgeries')->insert([
            ['patient_id' => 1, 'doctor_id' => 1, 'operation_tech_id' => 1, 'surgery_type' => 'Appendectomy', 'start_time' => '2025-08-01 09:00:00', 'end_time' => '2025-08-01 11:00:00', 'notes' => 'Successful operation'],
            ['patient_id' => 2, 'doctor_id' => 2, 'operation_tech_id' => 2, 'surgery_type' => 'Hernia Repair', 'start_time' => '2025-08-02 10:00:00', 'end_time' => '2025-08-02 12:00:00', 'notes' => 'No complications'],
        ]);
    }
}
