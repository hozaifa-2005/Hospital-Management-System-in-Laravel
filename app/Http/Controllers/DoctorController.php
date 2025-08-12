<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function allDoctors()
    {
        $doctors = Doctor::with('employee')->get();
        return view('doctors', compact('doctors'));
    }
    public function doctorSearch(Request $request)
    {
        $query = Doctor::query();
        if ($request->has('department') && !empty($request->department)) {
            $query->whereHas('department', function ($q) use ($request) {
                $q->where('name', $request->department);
            });
        }
        $doctors = $query->get();
        $department = $request->department; // نمرره للعرض

        return view('doctors.index', compact('doctors', 'department'));
    }



    ///////////////////
    //  public function index()
    //     {
    //         return response()->json(Doctor::all(), 200);
    //     }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'department_id' => 'required|exists:departments,id',
            'specialization' => 'required|string',
        ]);

        $doctor = Doctor::create($validated);
        return response()->json($doctor, 201);
    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return response()->json($doctor, 200);
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $validated = $request->validate([
            'employee_id' => 'sometimes|required|exists:employees,id',
            'department_id' => 'sometimes|required|exists:departments,id',
            'specialization' => 'sometimes|required|string',
        ]);

        $doctor->update($validated);
        return response()->json($doctor, 200);
    }

    public function destroy($id)
    {
        Doctor::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
