<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifts')->insert([
            ['name' => 'الصباح', 'start_time' => '08:00:00', 'end_time' => '14:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'المساء', 'start_time' => '14:00:00', 'end_time' => '20:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الليل', 'start_time' => '20:00:00', 'end_time' => '08:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'شفت إضافي', 'start_time' => '08:00:00', 'end_time' => '20:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'راحة', 'start_time' => '00:00:00', 'end_time' => '00:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'شفت الصباح المتأخر', 'start_time' => '10:00:00', 'end_time' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'شفت المساء المتأخر', 'start_time' => '16:00:00', 'end_time' => '22:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'شفت منتصف الليل', 'start_time' => '00:00:00', 'end_time' => '06:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'شفت نهاري', 'start_time' => '06:00:00', 'end_time' => '14:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'شفت ليلي متأخر', 'start_time' => '22:00:00', 'end_time' => '06:00:00', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
