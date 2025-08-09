<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'department_id',
        'specialization',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

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
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
