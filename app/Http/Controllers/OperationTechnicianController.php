<?php

namespace App\Http\Controllers;

use App\Models\OperationTechnician;
use Illuminate\Http\Request;

class OperationTechnicianController extends Controller
{
       public function index()
    {
        return response()->json(OperationTechnician::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'operation_experience' => 'nullable|string',
        ]);

        $opTech = OperationTechnician::create($validated);
        return response()->json($opTech, 201);
    }

    public function show($id)
    {
        $opTech = OperationTechnician::findOrFail($id);
        return response()->json($opTech, 200);
    }

    public function update(Request $request, $id)
    {
        $opTech = OperationTechnician::findOrFail($id);

        $validated = $request->validate([
            'employee_id' => 'sometimes|required|exists:employees,id',
            'operation_experience' => 'nullable|string',
        ]);

        $opTech->update($validated);
        return response()->json($opTech, 200);
    }

    public function destroy($id)
    {
        OperationTechnician::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
