<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            ['patient_id' => 1, 'doctor_id' => 3, 'department_id' => 2, 'appointment_date' => '2025-08-10', 'appointment_time' => '09:30:00', 'status' => 'مؤكد', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 2, 'doctor_id' => 1, 'department_id' => 1, 'appointment_date' => '2025-08-11', 'appointment_time' => '11:00:00', 'status' => 'قيد الانتظار', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 3, 'doctor_id' => 4, 'department_id' => 3, 'appointment_date' => '2025-08-12', 'appointment_time' => '14:15:00', 'status' => 'ملغى', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 4, 'doctor_id' => 2, 'department_id' => 2, 'appointment_date' => '2025-08-13', 'appointment_time' => '10:45:00', 'status' => 'مكتمل', 'created_at' => now(), 'updated_at' => now()],
            ['patient_id' => 5, 'doctor_id' => 5, 'department_id' => 4, 'appointment_date' => '2025-08-14', 'appointment_time' => '08:30:00', 'status' => 'قيد الانتظار', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
