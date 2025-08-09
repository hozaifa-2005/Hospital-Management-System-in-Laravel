<?php

namespace App\Http\Controllers;

use App\Models\PatientUser;
use Illuminate\Http\Request;

class PatientUserController extends Controller
{
        public function index()
    {
        return response()->json(PatientUser::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'nullable|exists:patients,id',
            'username' => 'required|unique:patient_users,username',
            'password' => 'required|string|min:6',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = PatientUser::create($validated);
        return response()->json($user, 201);
    }

    public function show($id)
    {
        $user = PatientUser::findOrFail($id);
        return response()->json($user, 200);
    }

    public function update(Request $request, $id)
    {
        $user = PatientUser::findOrFail($id);

        $validated = $request->validate([
            'patient_id' => 'nullable|exists:patients,id',
            'username' => 'sometimes|required|unique:patient_users,username,' . $id,
            'password' => 'sometimes|required|string|min:6',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);
        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        PatientUser::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
