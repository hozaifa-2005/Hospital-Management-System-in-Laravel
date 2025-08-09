<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
     public function index()
    {
        return response()->json(Shift::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s',
        ]);

        $shift = Shift::create($validated);
        return response()->json($shift, 201);
    }

    public function show($id)
    {
        $shift = Shift::findOrFail($id);
        return response()->json($shift, 200);
    }

    public function update(Request $request, $id)
    {
        $shift = Shift::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'start_time' => 'sometimes|required|date_format:H:i:s',
            'end_time' => 'sometimes|required|date_format:H:i:s',
        ]);

        $shift->update($validated);
        return response()->json($shift, 200);
    }

    public function destroy($id)
    {
        Shift::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
