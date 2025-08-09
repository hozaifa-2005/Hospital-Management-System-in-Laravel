<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visits')->insert([
            ['patient_id' => 1, 'doctor_id' => 1, 'diagnosis' => 'Flu', 'notes' => 'Rest and fluids recommended'],
            ['patient_id' => 2, 'doctor_id' => 2, 'diagnosis' => 'Migraine', 'notes' => 'Prescribed medication'],
        ]);
    }
}
