<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
     public function index()
    {
        return response()->json(Patient::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'gender' => 'required|in:ذكر,أنثى',
            'birth_date' => 'required|date',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|unique:patients,phone_number',
            'national_id_number' => 'nullable|unique:patients,national_id_number',
        ]);

        $patient = Patient::create($validated);
        return response()->json($patient, 201);
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return response()->json($patient, 200);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $validated = $request->validate([
            'first_name' => 'sometimes|required|string',
            'last_name' => 'sometimes|required|string',
            'father_name' => 'sometimes|required|string',
            'mother_name' => 'sometimes|required|string',
            'gender' => 'sometimes|required|in:ذكر,أنثى',
            'birth_date' => 'sometimes|required|date',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|unique:patients,phone_number,' . $id,
            'national_id_number' => 'nullable|unique:patients,national_id_number,' . $id,
        ]);

        $patient->update($validated);
        return response()->json($patient, 200);
    }

    public function destroy($id)
    {
        Patient::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
