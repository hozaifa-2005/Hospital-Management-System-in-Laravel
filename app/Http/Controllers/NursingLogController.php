<?php

namespace App\Http\Controllers;

use App\Models\NursingLog;
use Illuminate\Http\Request;

class NursingLogController extends Controller
{

    public function index()
    {
        return response()->json(NursingLog::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'nurse_id' => 'required|exists:nurses,id',
            'datetime' => 'required|date',
            'service_provided' => 'required|string',
        ]);

        $log = NursingLog::create($validated);
        return response()->json($log, 201);
    }

    public function show($id)
    {
        $log = NursingLog::findOrFail($id);
        return response()->json($log, 200);
    }

    public function update(Request $request, $id)
    {
        $log = NursingLog::findOrFail($id);

        $validated = $request->validate([
            'patient_id' => 'sometimes|required|exists:patients,id',
            'nurse_id' => 'sometimes|required|exists:nurses,id',
            'datetime' => 'sometimes|required|date',
            'service_provided' => 'sometimes|required|string',
        ]);

        $log->update($validated);
        return response()->json($log, 200);
    }

    public function destroy($id)
    {
        NursingLog::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
