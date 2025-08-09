<?php

namespace App\Http\Controllers;

use App\Models\LabResult;
use Illuminate\Http\Request;

class LabResultController extends Controller
{
        public function index()
    {
        return response()->json(LabResult::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'request_id' => 'required|exists:lab_requests,id',
            'result_data' => 'required|string',
            'technician_id' => 'required|exists:lab_technicians,id',
        ]);

        $labResult = LabResult::create($validated);
        return response()->json($labResult, 201);
    }

    public function show($id)
    {
        $labResult = LabResult::findOrFail($id);
        return response()->json($labResult, 200);
    }

    public function update(Request $request, $id)
    {
        $labResult = LabResult::findOrFail($id);

        $validated = $request->validate([
            'request_id' => 'sometimes|required|exists:lab_requests,id',
            'result_data' => 'sometimes|required|string',
            'technician_id' => 'sometimes|required|exists:lab_technicians,id',
        ]);

        $labResult->update($validated);
        return response()->json($labResult, 200);
    }

    public function destroy($id)
    {
        LabResult::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
