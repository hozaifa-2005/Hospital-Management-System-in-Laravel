<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    
    public function index()
    {
        return response()->json(Department::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:departments,name',
            'description' => 'nullable|string',
        ]);

        $department = Department::create($validated);
        return response()->json($department, 201);
    }

    public function show($id)
    {
        $department = Department::findOrFail($id);
        return response()->json($department, 200);
    }

    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|unique:departments,name,' . $id,
            'description' => 'nullable|string',
        ]);

        $department->update($validated);
        return response()->json($department, 200);
    }

    public function destroy($id)
    {
        Department::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
