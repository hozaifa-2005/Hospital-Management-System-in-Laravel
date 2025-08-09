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
            ['patient_id' => 3, 'username' => 'ahmad_k', 'password' => bcrypt('password123')],
            ['patient_id' => 4, 'username' => 'rana_s', 'password' => bcrypt('password123')],
            ['patient_id' => 5, 'username' => 'fadi_n', 'password' => bcrypt('password123')],
            ['patient_id' => 6, 'username' => 'salma_o', 'password' => bcrypt('password123')],
            ['patient_id' => 7, 'username' => 'hassan_a', 'password' => bcrypt('password123')],
            ['patient_id' => 8, 'username' => 'leila_b', 'password' => bcrypt('password123')],
            ['patient_id' => 9, 'username' => 'jamal_a', 'password' => bcrypt('password123')],
            ['patient_id' => 10, 'username' => 'hind_z', 'password' => bcrypt('password123')],
        ]);
    }
}
