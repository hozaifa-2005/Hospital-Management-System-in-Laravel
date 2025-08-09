<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
       public function index()
    {
        return response()->json(Nurse::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'assigned_ward' => 'nullable|string',
        ]);

        $nurse = Nurse::create($validated);
        return response()->json($nurse, 201);
    }

    public function show($id)
    {
        $nurse = Nurse::findOrFail($id);
        return response()->json($nurse, 200);
    }

    public function update(Request $request, $id)
    {
        $nurse = Nurse::findOrFail($id);

        $validated = $request->validate([
            'employee_id' => 'sometimes|required|exists:employees,id',
            'assigned_ward' => 'nullable|string',
        ]);

        $nurse->update($validated);
        return response()->json($nurse, 200);
    }

    public function destroy($id)
    {
        Nurse::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
