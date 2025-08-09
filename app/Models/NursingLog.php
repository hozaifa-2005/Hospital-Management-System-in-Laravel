<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NursingLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'nurse_id',
        'datetime',
        'service_provided',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function nurse()
    {
        return $this->belongsTo(Nurse::class);
    }
}
