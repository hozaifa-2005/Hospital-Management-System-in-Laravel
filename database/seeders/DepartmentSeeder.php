<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['name' => 'الطب الباطني', 'description' => 'قسم الأمراض الباطنية', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الجراحة', 'description' => 'قسم الجراحة العامة', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الأشعة', 'description' => 'قسم الأشعة والتصوير', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'المختبر', 'description' => 'قسم التحاليل الطبية', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'طب الأطفال', 'description' => 'قسم طب الأطفال', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'العيون', 'description' => 'قسم طب وجراحة العيون', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الأذن والحنجرة', 'description' => 'قسم الأنف والأذن والحنجرة', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الجلدية', 'description' => 'قسم الأمراض الجلدية', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الطب النفسي', 'description' => 'قسم الطب النفسي', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'الطب الرياضي', 'description' => 'قسم الطب الرياضي والعلاج الطبيعي', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
