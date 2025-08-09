<?php

namespace App\Http\Controllers;

use App\Models\SurgeryLog;
use Illuminate\Http\Request;

class SurgeryLogController extends Controller
{

    public function index()
    {
        return response()->json(SurgeryLog::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'surgery_id' => 'required|exists:surgeries,id',
            'item_used' => 'required|string',
            'quantity' => 'required|integer',
            'remarks' => 'nullable|string',
        ]);

        $log = SurgeryLog::create($validated);
        return response()->json($log, 201);
    }

    public function show($id)
    {
        $log = SurgeryLog::findOrFail($id);
        return response()->json($log, 200);
    }

    public function update(Request $request, $id)
    {
        $log = SurgeryLog::findOrFail($id);

        $validated = $request->validate([
            'surgery_id' => 'sometimes|required|exists:surgeries,id',
            'item_used' => 'sometimes|required|string',
            'quantity' => 'sometimes|required|integer',
            'remarks' => 'nullable|string',
        ]);

        $log->update($validated);
        return response()->json($log, 200);
    }

    public function destroy($id)
    {
        SurgeryLog::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
