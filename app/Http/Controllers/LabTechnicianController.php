<?php

namespace App\Http\Controllers;

use App\Models\LabTechnician;
use Illuminate\Http\Request;

class LabTechnicianController extends Controller
{
       public function index()
    {
        return response()->json(LabTechnician::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'lab_section' => 'nullable|string',
        ]);

        $tech = LabTechnician::create($validated);
        return response()->json($tech, 201);
    }

    public function show($id)
    {
        $tech = LabTechnician::findOrFail($id);
        return response()->json($tech, 200);
    }

    public function update(Request $request, $id)
    {
        $tech = LabTechnician::findOrFail($id);

        $validated = $request->validate([
            'employee_id' => 'sometimes|required|exists:employees,id',
            'lab_section' => 'nullable|string',
        ]);

        $tech->update($validated);
        return response()->json($tech, 200);
    }

    public function destroy($id)
    {
        LabTechnician::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
