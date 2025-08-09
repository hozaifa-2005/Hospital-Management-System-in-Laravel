<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            ['first_name' => 'أحمد', 'last_name' => 'النجار', 'father_name' => 'محمد', 'mother_name' => 'فاطمة', 'gender' => 'ذكر', 'birth_date' => '1980-04-15', 'email' => 'ahmad.najjar@example.com', 'phone_number' => '0933000001', 'job_title' => 'طبيب', 'shift_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'سارة', 'last_name' => 'الحسن', 'father_name' => 'علي', 'mother_name' => 'رنا', 'gender' => 'أنثى', 'birth_date' => '1985-07-22', 'email' => 'sara.hassan@example.com', 'phone_number' => '0933000002', 'job_title' => 'ممرضة', 'shift_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'يوسف', 'last_name' => 'المهدي', 'father_name' => 'سامي', 'mother_name' => 'ليلى', 'gender' => 'ذكر', 'birth_date' => '1975-12-01', 'email' => 'yousef.almahdi@example.com', 'phone_number' => '0933000003', 'job_title' => 'فني أشعة', 'shift_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'ليلى', 'last_name' => 'السيد', 'father_name' => 'مروان', 'mother_name' => 'سمية', 'gender' => 'أنثى', 'birth_date' => '1990-02-20', 'email' => 'leila.sayed@example.com', 'phone_number' => '0933000004', 'job_title' => 'فني مختبر', 'shift_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'فهد', 'last_name' => 'العباسي', 'father_name' => 'حسن', 'mother_name' => 'هدى', 'gender' => 'ذكر', 'birth_date' => '1988-09-14', 'email' => 'fahd.abassi@example.com', 'phone_number' => '0933000005', 'job_title' => 'فني عمليات', 'shift_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'رنا', 'last_name' => 'العلوي', 'father_name' => 'أمين', 'mother_name' => 'سحر', 'gender' => 'أنثى', 'birth_date' => '1992-06-10', 'email' => 'rana.alalwi@example.com', 'phone_number' => '0933000006', 'job_title' => 'موظفة استقبال', 'shift_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'علي', 'last_name' => 'الفتاح', 'father_name' => 'جميل', 'mother_name' => 'جميلة', 'gender' => 'ذكر', 'birth_date' => '1983-03-05', 'email' => 'ali.fattah@example.com', 'phone_number' => '0933000007', 'job_title' => 'ممرض جناح', 'shift_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'منى', 'last_name' => 'الشامي', 'father_name' => 'سعيد', 'mother_name' => 'أماني', 'gender' => 'أنثى', 'birth_date' => '1987-11-30', 'email' => 'mona.shami@example.com', 'phone_number' => '0933000008', 'job_title' => 'ممرضة', 'shift_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'كريم', 'last_name' => 'حسين', 'father_name' => 'جمال', 'mother_name' => 'سميرة', 'gender' => 'ذكر', 'birth_date' => '1995-08-12', 'email' => 'karim.hussein@example.com', 'phone_number' => '0933000009', 'job_title' => 'فني أشعة', 'shift_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'هدى', 'last_name' => 'الجابر', 'father_name' => 'نبيل', 'mother_name' => 'رغد', 'gender' => 'أنثى', 'birth_date' => '1989-04-22', 'email' => 'huda.jaber@example.com', 'phone_number' => '0933000010', 'job_title' => 'طبيب', 'shift_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
