<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Patient::factory()->count(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // PatientSeeder::class,
            DepartmentSeeder::class,
            ShiftSeeder::class,
            EmployeeSeeder::class,
            DoctorSeeder::class,
            AppointmentSeeder::class,
            ReceptionistSeeder::class,
            NurseSeeder::class,
            AdminSeeder::class,
            EmployeeUserSeeder::class,
            PatientUserSeeder::class,
            NursingLogSeeder::class,
            AdminUserSeeder::class,
            RadiologyTechnicianSeeder::class,
            VisitSeeder::class,
            OperationTechnicianSeeder::class,
            PrescriptionSeeder::class,
            LabTechnicianSeeder::class,
            RadiologyRequestSeeder::class,
            LabRequestSeeder::class,
            SurgerySeeder::class,
            SurgeryLogSeeder::class,
        ]);
    }
}
