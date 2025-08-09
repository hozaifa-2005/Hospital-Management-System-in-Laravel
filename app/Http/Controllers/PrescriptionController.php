<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        return response()->json(Prescription::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'visit_id' => 'required|exists:visits,id',
            'medicine_name' => 'required|string',
            'dosage' => 'required|string',
            'duration' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $prescription = Prescription::create($validated);
        return response()->json($prescription, 201);
    }

    public function show($id)
    {
        $prescription = Prescription::findOrFail($id);
        return response()->json($prescription, 200);
    }

    public function update(Request $request, $id)
    {
        $prescription = Prescription::findOrFail($id);

        $validated = $request->validate([
            'visit_id' => 'sometimes|required|exists:visits,id',
            'medicine_name' => 'sometimes|required|string',
            'dosage' => 'sometimes|required|string',
            'duration' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $prescription->update($validated);
        return response()->json($prescription, 200);
    }

    public function destroy($id)
    {
        Prescription::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
