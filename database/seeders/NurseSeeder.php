<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nurses')->insert([
            ['employee_id' => 1, 'assigned_ward' => 'Ward A', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 2, 'assigned_ward' => 'Ward B', 'created_at' => now(), 'updated_at' => now()],
            ['employee_id' => 3, 'assigned_ward' => 'Ward C', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
