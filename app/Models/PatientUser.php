<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'username',
        'password',
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
