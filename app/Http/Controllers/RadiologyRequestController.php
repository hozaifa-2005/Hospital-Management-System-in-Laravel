<?php

namespace App\Http\Controllers;

use App\Models\RadiologyRequest;
use Illuminate\Http\Request;

class RadiologyRequestController extends Controller
{
      public function index()
    {
        return response()->json(RadiologyRequest::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'image_type' => 'required|string',
        ]);

        $requestRadiology = RadiologyRequest::create($validated);
        return response()->json($requestRadiology, 201);
    }

    public function show($id)
    {
        $requestRadiology = RadiologyRequest::findOrFail($id);
        return response()->json($requestRadiology, 200);
    }

    public function update(Request $request, $id)
    {
        $requestRadiology = RadiologyRequest::findOrFail($id);

        $validated = $request->validate([
            'patient_id' => 'sometimes|required|exists:patients,id',
            'doctor_id' => 'sometimes|required|exists:doctors,id',
            'image_type' => 'sometimes|required|string',
        ]);

        $requestRadiology->update($validated);
        return response()->json($requestRadiology, 200);
    }

    public function destroy($id)
    {
        RadiologyRequest::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
