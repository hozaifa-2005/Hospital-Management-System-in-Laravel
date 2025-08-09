<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prescriptions')->insert([
            ['visit_id' => 1, 'medicine_name' => 'Paracetamol', 'dosage' => '500mg twice daily', 'duration' => '5 days', 'notes' => 'Take after meals'],
            ['visit_id' => 2, 'medicine_name' => 'Ibuprofen', 'dosage' => '400mg three times daily', 'duration' => '7 days', 'notes' => 'Avoid on empty stomach'],
        ]);
    }
}
