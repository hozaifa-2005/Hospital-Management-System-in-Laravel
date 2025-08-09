<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'gender',
        'birth_date',
        'address',
        'phone_number',
        'national_id_number',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function radiologyRequests()
    {
        return $this->hasMany(RadiologyRequest::class);
    }

    public function labRequests()
    {
        return $this->hasMany(LabRequest::class);
    }

    public function surgeries()
    {
        return $this->hasMany(Surgery::class);
    }

    public function nursingLogs()
    {
        return $this->hasMany(NursingLog::class);
    }
}
