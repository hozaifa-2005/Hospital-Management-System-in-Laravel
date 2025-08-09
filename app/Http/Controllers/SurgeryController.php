<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    public function index()
    {
        return response()->json(Surgery::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'operation_tech_id' => 'required|exists:operation_technicians,id',
            'surgery_type' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date',
            'notes' => 'nullable|string',
        ]);

        $surgery = Surgery::create($validated);
        return response()->json($surgery, 201);
    }

    public function show($id)
    {
        $surgery = Surgery::findOrFail($id);
        return response()->json($surgery, 200);
    }

    public function update(Request $request, $id)
    {
        $surgery = Surgery::findOrFail($id);

        $validated = $request->validate([
            'patient_id' => 'sometimes|required|exists:patients,id',
            'doctor_id' => 'sometimes|required|exists:doctors,id',
            'operation_tech_id' => 'sometimes|required|exists:operation_technicians,id',
            'surgery_type' => 'sometimes|required|string',
            'start_time' => 'sometimes|required|date',
            'end_time' => 'nullable|date',
            'notes' => 'nullable|string',
        ]);

        $surgery->update($validated);
        return response()->json($surgery, 200);
    }

    public function destroy($id)
    {
        Surgery::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
