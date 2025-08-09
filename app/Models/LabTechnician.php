<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTechnician extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'lab_section',
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
