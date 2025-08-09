<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceptionistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receptionists')->insert([
            ['employee_id' => 5, 'desk_number' => '1'],
            ['employee_id' => 1, 'desk_number' => '2'],
        ]);
    }
}
