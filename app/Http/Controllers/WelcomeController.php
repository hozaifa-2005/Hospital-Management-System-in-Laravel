<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Nurse;

class WelcomeController extends Controller
{
    public function index()
    {
        $doctorsCount = Doctor::count();
        $departmentsCount = Department::count();
        $nurseCount = Nurse::count();
        $admin = Admin::first();
        $departments = Department::take(5)->get();
        return view('welcome', compact('doctorsCount', 'departmentsCount', 'nurseCount', 'admin', 'departments'));
    }

    public function allDepartments()
    {
        $departments = Department::all();
        return view('departments', compact('departments'));
    }
}
