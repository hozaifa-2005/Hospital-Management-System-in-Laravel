<?php

namespace App\Http\Controllers;

use App\Models\EmployeeUser;
use Illuminate\Http\Request;

class EmployeeUserController extends Controller
{
    public function index()
    {
        return response()->json(EmployeeUser::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'nullable|exists:employees,id',
            'username' => 'required|unique:employee_users,username',
            'password' => 'required|string|min:6',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = EmployeeUser::create($validated);
        return response()->json($user, 201);
    }

    public function show($id)
    {
        $user = EmployeeUser::findOrFail($id);
        return response()->json($user, 200);
    }

    public function update(Request $request, $id)
    {
        $user = EmployeeUser::findOrFail($id);

        $validated = $request->validate([
            'employee_id' => 'nullable|exists:employees,id',
            'username' => 'sometimes|required|unique:employee_users,username,' . $id,
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
        EmployeeUser::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
