<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadiologyRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'image_type',
        'requested_at',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function result()
    {
        return $this->hasOne(RadiologyResult::class, 'request_id');
    }
}
