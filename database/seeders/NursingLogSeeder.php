<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NursingLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nursing_logs')->insert([
            ['patient_id' => 1, 'nurse_id' => 1, 'datetime' => '2025-08-01 08:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 2, 'nurse_id' => 2, 'datetime' => '2025-08-01 09:15:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 3, 'nurse_id' => 1, 'datetime' => '2025-08-01 10:30:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 4, 'nurse_id' => 3, 'datetime' => '2025-08-01 11:45:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 5, 'nurse_id' => 2, 'datetime' => '2025-08-01 13:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 1, 'nurse_id' => 3, 'datetime' => '2025-08-02 08:30:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 2, 'nurse_id' => 1, 'datetime' => '2025-08-02 09:45:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 3, 'nurse_id' => 2, 'datetime' => '2025-08-02 11:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 4, 'nurse_id' => 3, 'datetime' => '2025-08-02 12:15:00', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 5, 'nurse_id' => 1, 'datetime' => '2025-08-02 13:30:00', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
