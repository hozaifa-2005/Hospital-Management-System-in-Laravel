<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{

    public function index()
    {
        return response()->json(Visit::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'diagnosis' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $visit = Visit::create($validated);
        return response()->json($visit, 201);
    }

    public function show($id)
    {
        $visit = Visit::findOrFail($id);
        return response()->json($visit, 200);
    }

    public function update(Request $request, $id)
    {
        $visit = Visit::findOrFail($id);

        $validated = $request->validate([
            'patient_id' => 'sometimes|required|exists:patients,id',
            'doctor_id' => 'sometimes|required|exists:doctors,id',
            'diagnosis' => 'sometimes|required|string',
            'notes' => 'nullable|string',
        ]);

        $visit->update($validated);
        return response()->json($visit, 200);
    }

    public function destroy($id)
    {
        Visit::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
