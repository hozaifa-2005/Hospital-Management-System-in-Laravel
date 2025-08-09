<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            ['employee_id' => 1, 'department_id' => 1, 'specialization' => 'جراحة عامة', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 2, 'department_id' => 2, 'specialization' => 'طب أطفال', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 3, 'department_id' => 3, 'specialization' => 'أمراض قلب', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 4, 'department_id' => 4, 'specialization' => 'أمراض جلدية', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 5, 'department_id' => 5, 'specialization' => 'أنف أذن حنجرة', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 6, 'department_id' => 1, 'specialization' => 'جراحة أعصاب', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 7, 'department_id' => 2, 'specialization' => 'طب العيون', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 8, 'department_id' => 3, 'specialization' => 'أمراض باطنية', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 9, 'department_id' => 4, 'specialization' => 'طب الأسنان', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 10, 'department_id' => 5, 'specialization' => 'طب الأورام', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
