<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'operation_tech_id',
        'surgery_type',
        'start_time',
        'end_time',
        'notes',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function operationTechnician()
    {
        return $this->belongsTo(OperationTechnician::class, 'operation_tech_id');
    }

    public function logs()
    {
        return $this->hasMany(SurgeryLog::class);
    }
}
