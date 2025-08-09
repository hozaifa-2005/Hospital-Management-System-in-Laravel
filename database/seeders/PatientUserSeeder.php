<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patient_users')->insert([
            ['patient_id' => 1, 'username' => 'mohamad_y', 'password' => bcrypt('password123')],
            ['patient_id' => 2, 'username' => 'lama_f', 'password' => bcrypt('password123')],
        ]);
    }
}
