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
}
