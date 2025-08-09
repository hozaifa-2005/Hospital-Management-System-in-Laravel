<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return response()->json(Appointment::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'department_id' => 'required|exists:departments,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'status' => 'in:مكتمل,ملغى,مؤكد,قيد الانتظار',
        ]);

        $appointment = Appointment::create($validated);
        return response()->json($appointment, 201);
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json($appointment, 200);
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $validated = $request->validate([
            'patient_id' => 'sometimes|required|exists:patients,id',
            'doctor_id' => 'sometimes|required|exists:doctors,id',
            'department_id' => 'sometimes|required|exists:departments,id',
            'appointment_date' => 'sometimes|required|date',
            'appointment_time' => 'sometimes|required',
            'status' => 'sometimes|in:قيد الانتظار,مؤكد,ملغى,مكتمل',
        ]);

        $appointment->update($validated);
        return response()->json($appointment, 200);
    }

    public function destroy($id)
    {
        Appointment::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
