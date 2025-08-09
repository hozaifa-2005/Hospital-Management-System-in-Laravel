<?php

namespace App\Http\Controllers;

use App\Models\Receptionist;
use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
     public function index()
    {
        return response()->json(Receptionist::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'desk_number' => 'nullable|string',
        ]);

        $receptionist = Receptionist::create($validated);
        return response()->json($receptionist, 201);
    }

    public function show($id)
    {
        $receptionist = Receptionist::findOrFail($id);
        return response()->json($receptionist, 200);
    }

    public function update(Request $request, $id)
    {
        $receptionist = Receptionist::findOrFail($id);

        $validated = $request->validate([
            'employee_id' => 'sometimes|required|exists:employees,id',
            'desk_number' => 'nullable|string',
        ]);

        $receptionist->update($validated);
        return response()->json($receptionist, 200);
    }

    public function destroy($id)
    {
        Receptionist::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
