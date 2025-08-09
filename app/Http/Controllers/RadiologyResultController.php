<?php

namespace App\Http\Controllers;

use App\Models\RadiologyResult;
use Illuminate\Http\Request;

class RadiologyResultController extends Controller
{
    public function index()
    {
        return response()->json(RadiologyResult::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'request_id' => 'required|exists:radiology_requests,id',
            'image_path' => 'required|string',
            'report' => 'nullable|string',
            'technician_id' => 'required|exists:radiology_technicians,id',
        ]);

        $radiologyResult = RadiologyResult::create($validated);
        return response()->json($radiologyResult, 201);
    }

    public function show($id)
    {
        $radiologyResult = RadiologyResult::findOrFail($id);
        return response()->json($radiologyResult, 200);
    }

    public function update(Request $request, $id)
    {
        $radiologyResult = RadiologyResult::findOrFail($id);

        $validated = $request->validate([
            'request_id' => 'sometimes|required|exists:radiology_requests,id',
            'image_path' => 'sometimes|required|string',
            'report' => 'nullable|string',
            'technician_id' => 'sometimes|required|exists:radiology_technicians,id',
        ]);

        $radiologyResult->update($validated);
        return response()->json($radiologyResult, 200);
    }

    public function destroy($id)
    {
        RadiologyResult::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
