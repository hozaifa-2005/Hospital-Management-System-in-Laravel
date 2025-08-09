<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'gender',
        'birth_date',
        'email',
        'phone_number',
        'job_title',
        'shift_id',
    ];

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function userAccount()
    {
        return $this->hasOne(EmployeeUser::class);
    }
    public function nurse()
    {
        return $this->hasOne(Nurse::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function receptionist()
    {
        return $this->hasOne(Receptionist::class);
    }

    public function operationTechnician()
    {
        return $this->hasOne(OperationTechnician::class);
    }

    public function radiologyTechnician()
    {
        return $this->hasOne(RadiologyTechnician::class);
    }

    public function labTechnician()
    {
        return $this->hasOne(LabTechnician::class);
    }
}
