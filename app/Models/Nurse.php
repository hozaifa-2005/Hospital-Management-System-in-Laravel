<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'assigned_ward',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function nursingLogs()
    {
        return $this->hasMany(NursingLog::class);
    }
    
}
