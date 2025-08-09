<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            ['id' => 1, 'first_name' => 'علي', 'last_name' => 'محمد', 'father_name' => 'سعيد', 'mother_name' => 'نور', 'gender' => 'ذكر', 'birth_date' => '1990-01-01', 'address' => 'دمشق', 'phone_number' => '0933000001', 'national_id_number' => '123456789', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'first_name' => 'منى', 'last_name' => 'علي', 'father_name' => 'خالد', 'mother_name' => 'جميلة', 'gender' => 'أنثى', 'birth_date' => '1985-02-02', 'address' => 'حلب', 'phone_number' => '0933000002', 'national_id_number' => '987654321', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'first_name' => 'سامي', 'last_name' => 'كريم', 'father_name' => 'فهد', 'mother_name' => 'سما', 'gender' => 'ذكر', 'birth_date' => '1988-03-03', 'address' => 'حماه', 'phone_number' => '0933000003', 'national_id_number' => '456789123', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'first_name' => 'رنا', 'last_name' => 'سعيد', 'father_name' => 'محمود', 'mother_name' => 'هدى', 'gender' => 'أنثى', 'birth_date' => '1992-04-04', 'address' => 'اللاذقية', 'phone_number' => '0933000004', 'national_id_number' => '789123456', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'first_name' => 'فادي', 'last_name' => 'نجار', 'father_name' => 'هشام', 'mother_name' => 'جميلة', 'gender' => 'ذكر', 'birth_date' => '1995-05-05', 'address' => 'طرطوس', 'phone_number' => '0933000005', 'national_id_number' => '321654987', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
