<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurgeryLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surgery_logs')->insert([
            ['surgery_id' => 1, 'item_used' => 'Scalpel', 'quantity' => 1, 'remarks' => 'Sterilized'],
            ['surgery_id' => 2, 'item_used' => 'Sutures', 'quantity' => 5, 'remarks' => 'Absorbable'],
        ]);
    }
}
