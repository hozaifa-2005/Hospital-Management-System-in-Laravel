<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return response()->json(Employee::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'father_name' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'gender' => 'required|in:ذكر,أنثى',
            'birth_date' => 'required|date',
            'email' => 'nullable|email|unique:employees,email',
            'phone_number' => 'required|string|unique:employees,phone_number',
            'job_title' => 'required|string',
            'shift_id' => 'required|exists:shifts,id',
        ]);

        $employee = Employee::create($validated);
        return response()->json($employee, 201);
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json($employee, 200);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $validated = $request->validate([
            'first_name' => 'sometimes|required|string',
            'last_name' => 'sometimes|required|string',
            'father_name' => 'nullable|string',
            'mother_name' => 'nullable|string',
            'gender' => 'sometimes|required|in:ذكر,أنثى',
            'birth_date' => 'sometimes|required|date',
            'email' => 'nullable|email|unique:employees,email,' . $id,
            'phone_number' => 'sometimes|required|string|unique:employees,phone_number,' . $id,
            'job_title' => 'sometimes|required|string',
            'shift_id' => 'sometimes|required|exists:shifts,id',
        ]);

        $employee->update($validated);
        return response()->json($employee, 200);
    }

    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
