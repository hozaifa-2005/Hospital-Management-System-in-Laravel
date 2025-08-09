<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationTechnician extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'operation_experience',
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
